# Based on convert script from vwall/compass-twitter-bootstrap gem.
# https://github.com/vwall/compass-twitter-bootstrap/blob/#{@branch}/build/convert.rb

require 'open-uri'
require 'json'
require 'fileutils'
require "pry"
require "dotenv"
require "autoprefixer-rails"

Dotenv.load

class Converter

  GIT_DATA = 'https://api.github.com/repos'
  GIT_RAW  = 'https://raw.github.com'
  TOKEN    = ENV['TOKEN']
  BROWSERS = ['last 2 version', '> 1%', 'opera 12.1', 'safari 6', 'ie 9', 'bb 10', 'android 4']

  def initialize(branch)
    @repo               = 'Semantic-Org/Semantic-UI'
    @repo_url           = "https://github.com/#@repo"
    @branch             = branch || 'master'
    @git_data_trees     = "#{GIT_DATA}/#{@repo}/git/trees"
    @git_raw_src        = "#{GIT_RAW}/#{@repo}/#{@branch}/src"
    @branch_sha         = get_tree_sha
    @less_paths         = ['collections', 'elements', 'views', 'modules']
    @js_paths           = ['modules', 'behavior']
    @fonts_images_paths = ['fonts', 'images']
    @save_at            = { js: 'app/assets/javascripts/semantic-ui',
                            scss: 'app/assets/stylesheets/semantic-ui',
                            images: 'app/assets/images/semantic-ui',
                            fonts: 'app/assets/fonts/semantic-ui'
                          }
  end

  def process
    process_stylesheets_assets
    process_javascript_assets
    process_images_and_fonts_assets
    store_version
  end

  def process_stylesheets_assets
    main_content = ''
     semantic_ui_less_paths.each do |path, sha|
      content = ''
      semantic_ui_less_files(sha).each do |name|
        file_name = name.gsub('.less', '')
        file = open_git_file("#{@git_raw_src}/#{path}/#{name}")
        file = convert(file)
        begin
          file = AutoprefixerRails.compile(file, BROWSERS)
        rescue
          puts "======== #{file_name} autoprefixer fail ========="
        end
        save_file(name, file, path)
        content += "@import '#{file_name}';\n"
      end
      save_file('all', content, path)
      main_content += "@import 'semantic-ui/#{path}/all';\n";
    end
    File.open("app/assets/stylesheets/semantic-ui.scss", "w+") { |file| file.write(main_content) }
  end

  def process_javascript_assets
    content = ''
     semantic_ui_js_paths.each do |path, sha|
      semantic_ui_js_files(sha).each do |name|
        file_name = name.gsub('.js', '')
        if path == 'modules'
          file = open_git_file("#{@git_raw_src}/#{path}/#{name}")
          save_file(name, file, nil, 'js')
          content += "//= require semantic-ui/#{file_name}\n"
        else
          file = open_git_file("#{@git_raw_src}/modules/behavior/#{name}")
          save_file(name, file, 'behavior', 'js')
          content += "//= require semantic-ui/behavior/#{file_name}\n"
        end
      end
    end
    File.open("app/assets/javascripts/semantic-ui.js", "w+") { |file| file.write(content) }
  end

  def process_images_and_fonts_assets
     semantic_ui_fonts_images_paths.each do |path, sha|
      semantic_ui_fonts_images_files(sha).each do |name|
        file_name = name.gsub('.less', '')
        file = open_git_file("#{@git_raw_src}/#{path}/#{name}")
        save_file(name, file, nil, path)
      end
    end
  end


private

  # Get the sha of less branch
  def get_tree_sha
    sha = nil
    trees = get_json("#{@git_data_trees}/#{@branch}")
    trees['tree'].find{|t| t['path'] == 'src'}['sha']
  end

  def semantic_ui_less_paths
    paths = get_json("#{@git_data_trees}/#{get_tree_sha}")
    paths['tree'].select{|f| f['type'] == 'tree' && @less_paths.include?(f['path']) }.map{|f| [f['path'], f['sha']] }
  end

  def semantic_ui_less_files(sha)
   files = get_json("#{@git_data_trees}/#{sha}")
   files['tree'].select{|f| f['type'] == 'blob' && f['path'] =~ /\.less$/ }.map{|f| f['path'] }
  end

  def semantic_ui_js_paths
    paths = get_json("#{@git_data_trees}/#{get_tree_sha}")
    paths = paths['tree'].select{|f| f['type'] == 'tree' && @js_paths.include?(f['path']) }.map{|f| [f['path'], f['sha']] }
    behavior_paths = get_json("#{@git_data_trees}/#{paths[0][1]}")
    behavior_paths = behavior_paths['tree'].select{|f| f['type'] == 'tree' && f['path'] == 'behavior' }.map{|f| [f['path'], f['sha']] }
    js_paths = paths + behavior_paths
  end

  def semantic_ui_js_files(sha)
   files = get_json("#{@git_data_trees}/#{sha}")
   files['tree'].select{|f| f['type'] == 'blob' && f['path'] =~ /\.js$/ }.map{|f| f['path'] }
  end

  def semantic_ui_fonts_images_paths
    paths = get_json("#{@git_data_trees}/#{get_tree_sha}")
    paths['tree'].select{|f| f['type'] == 'tree' && @fonts_images_paths.include?(f['path']) }.map{|f| [f['path'], f['sha']] }
  end

  def semantic_ui_fonts_images_files(sha)
   files = get_json("#{@git_data_trees}/#{sha}")
   files['tree'].select{|f| f['type'] == 'blob'}.map{|f| f['path'] }
  end


  def convert(file)
    file = replace_interpolation(file)
    file = replace_vars(file)
    file = replace_fonts(file)
    # file = replace_font_family(file)
    file = replace_fonts_url(file)
    file = replace_grads(file)
    file = replace_mixins(file)
    file = replace_less_extend(file)
    file = replace_includes(file)
    file = replace_spin(file)
    file = replace_opacity(file)
    file = replace_image_urls(file)
    file = replace_image_paths(file)
    file = replace_escaping(file)

    file
  end

  def open_git_file(file)
    open(file).read
  end

  def save_file(name, content, path, type='stylesheets')
    case type
    when 'stylesheets'
      name = name.gsub(/\.less/, '')
      file = "#{@save_at[:scss]}/#{path}/_#{name}.scss"
    when 'js', 'images', 'fonts'
      file = (path.nil? ? "#{@save_at[type.to_sym]}/#{name}" : "#{@save_at[type.to_sym]}/#{path}/#{name}")
    end
    dir = File.dirname(file)
    FileUtils.mkdir_p(dir) unless File.directory?(file)
    File.open(file, 'w+') { |f| f.write(content) }
    puts "Saved #{name} at #{path}\n"
  end

  def get_json(url)
    url += "?access_token=#{TOKEN}" unless TOKEN.nil?
    data = open_git_file(url)
    data = JSON.parse data
  end

  def store_version
    path = 'lib/semantic/ui/sass/version.rb'
    content = File.read(path).sub(/SEMANTIC_UI_SHA\s*=\s*['"][\w]+['"]/, "SEMANTIC_UI_SHA = '#@branch_sha'")
    File.open(path, 'w') { |f| f.write(content) }
  end

  def replace_interpolation(less)
    less.gsub(/@{([^}]+)}/, '#{$\1}')
  end

  def replace_vars(less)
    less = less.dup
    # skip header comment
    less =~ %r(\A/\*(.*?)\*/)m
    from = $~ ? $~.to_s.length : 0
    less[from..-1] = less[from..-1].
        gsub(/(?!@mixin|@media|@page|@keyframes|@font-face|@-\w)@/, '$').
        # variables that would be ignored by gsub above: e.g. @page-header-border-color
        gsub(/@(page[\w-]+)/, '$\1')
    less
  end

  def fix_progress_bar(less)
    less = less.gsub(/(\$)(-webkit-keyframes progress-bar-stripes)/, '@\2')
    less = less.gsub(/(\$)(-moz-keyframes)/, '@\2')
    less = less.gsub(/(\$)(keyframes progress-bar-stripes)/, '@\2')
  end

  def replace_fonts(less)
    less.gsub(/#font \> \.([\w-]+)/, '@include ctb-font-\1')
  end

  def replace_fonts_url(less)
    less.gsub(/url\(\.\.\/fonts\/?(.*?)\)/) {|s| "font-url(\"semantic-ui/#{$1}\")" }
  end

  def replace_font_family(less)
    less.gsub(/#font \> #family \> \.([\w-]+)/, '@include ctb-font-family-\1')
  end

  def replace_grads(less)
    less.gsub(/#gradient \> \.([\w-]+)/, '@include ctb-gradient-\1')
  end

  def replace_mixins(less)
    less.gsub(/^\.([\w-]*)(\(.*\))([\s\{]+)$/, '@mixin \1\2\3')
  end

  def replace_includes(less)
    less.gsub(/\.([\w-]*)(\(.*\));?/, '@include ctb-\1\2;')
  end

  def replace_less_extend(less)
    less.gsub(/\#(\w+) \> \.([\w-]*)(\(.*\));?/, '@include ctb-\1-\2\3;')
  end

  def replace_spin(less)
    less.gsub(/spin/, 'adjust-hue')
  end

  def replace_opacity(scss)
    scss.gsub(/\@include opacity\((\d+)\)/) {|s| "@include ctb-opacity(#{$1.to_f / 100})"}
  end

  def replace_image_urls(less)
    less.gsub(/url\("?(.*?).gif"?\)/) {|s| "image-url(\"#{$1}.gif\")" }
  end

  def replace_image_paths(less)
    less.gsub('../images/', 'semantic-ui/')
  end

  def replace_escaping(less)
    less = less.gsub(/\~"([^"]+)"/, '#{\1}') # Get rid of ~ escape
    less.gsub(/(\W)e\("([^\)]+)"\)/) {|s| "#{$1 if $1 != /\s/}#{$2}"} # Get rid of e escape
  end

  def insert_default_vars(scss)
    scss.gsub(/^(\$.+);$/, '\1 !default;')
  end

end