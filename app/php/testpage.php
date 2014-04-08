<noscript>
<!-- Specify what happens if the user has JavaScript disabled. For example, you may want to display the lists in the right column instead of hiding them by default. -->
</noscript>
<div id="wrap">
  <header>
    <hgroup>
      <!-- Example comment: Add valid elements within header group -->
      <h1>HTML5 Elements</h1>
    </hgroup>
    <p>This is the global <code>&lt;header&gt;</code> element for this page, including the <code>&lt;hgroup&gt;</code> and <code>&lt;nav&gt;</code> elements.</p>
    <nav>
      <ul>
        <li><a href="#" title="Global header link">Global <code>&lt;nav&gt;</code> link within the <code>&lt;header&gt;</code></a></li>
        <li><a href="#" title="Global header link">Global <code>&lt;nav&gt;</code> link within the <code>&lt;header&gt;</code></a></li>
        <li><a href="#" title="Global header link">Global <code>&lt;nav&gt;</code> link within the <code>&lt;header&gt;</code></a></li>
      </ul>
    </nav>
  </header>
  
  <section>
    <header>
      <h2>Section header</h2>
    </header>
    <article>
      <header>
        <h3>Article header</h3>
      </header>
      <div>
        <p><a href="#" title="Download the HTML and asset files">Download the HTML and asset files</a> <br>
          (ZIP does not include audio or video to reduce file size. <br>
          You can download them from this page using your browser.)</p>
        <h4>Purpose of this document:</h4>
        <ul>
          <li>Includes all the HTML5 elements as listed in the side column. </li>
          <li>Minimal styling has been used. Use this document to test CSS files (base, reset, custom, etc.) on desired elements in various browsers.</li>
          <li>Use this document to create comprehensive templates that need to use many of the common HTML5 elements.</li>
          <li>Includes jQuery because it comes in handy.</li>
          <li>Includes HTML5 compatibility for Internet Explorer.</li>
          <li>Includes CSS files for screen, print, mobile and smart phones.</li>
          <li>See <a href="#info" title="Reference links below">reference links below</a> for more information.</li>
        </ul>
        <p><span>Note:</span> This is only a guide &mdash; a starting point &mdash; if you will.</p>
        <hr>
        <h1>Header 1 &lt;h1&gt;</h1>
        <p>This is an example paragrah used within this article for this document.</p>
        <h2>Header 2 &lt;h2&gt;</h2>
        <p>This is an example paragrah used within this article for this document.</p>
        <h3>Header 3 &lt;h3&gt;</h3>
        <p>This is an example paragrah used within this article for this document.</p>
        <h4>Header 1 &lt;h4&gt;</h4>
        <p>This is an example paragrah used within this article for this document.</p>
        <h5>Header &lt;h5&gt;</h5>
        <p>This is an example paragrah used within this article for this document.</p>
        <h6>Header &lt;h6&gt;</h6>
        <p>This is an example paragrah used within this article for this document.</p>
        <hr>
        <h4>Unordered list</h4>
        <ul>
          <li>Unordered list item</li>
          <li>Unordered list item
            <ul>
              <li>Unordered list item</li>
              <li>Unordered list item
                <ul>
                  <li>Unordered list item</li>
                  <li>Unordered list item</li>
                  <li>Unordered list item</li>
                </ul>
              </li>
              <li>Unordered list item</li>
            </ul>
          </li>
          <li>Unordered list item</li>
        </ul>
        <h4>Ordered list</h4>
        <ol>
          <li>Ordered list item</li>
          <li>Ordered list item
            <ol>
              <li>Ordered list item</li>
              <li>Ordered list item
                <ol>
                  <li>Ordered list item</li>
                  <li>Ordered list item</li>
                  <li>Ordered list item</li>
                </ol>
              </li>
              <li>Ordered list item</li>
            </ol>
          </li>
          <li>Ordered list item</li>
        </ol>
        <hr>
        <h4>Address and blockquote:</h4>
        <address>
        700 Address Element Road<br>
        Town, State Zip
        </address>
        <blockquote>This is a blockquote.</blockquote>
        <hr>
        <h4>Audio and video:</h4>
        <p>Example of the <code>&lt;audio&gt;</code> element:</p>
        <audio controls autobuffer>
          <source src="#" />
          <!-- Find the audio file here: http://www.kahvi.org/releases.php?release_number=285 -->
          Your browser does not support OGG audio. Try using Safari, Chrome or Firefox.</audio>
        <p>Example of the <code>&lt;video&gt;</code> element:</p>
        <video src="#" controls autobuffer>
          <!-- Find the video file here: http://www.polycrystal.org/lego/movies.html -->
          <p>Try using Safari, Chrome or Firefox to view this video. You can also <a href="#">download the video</a>.</p>
        </video>
        <hr>
        <h4>Figure:</h4>
        <figure>
          <p>Use an <code>&lt;img&gt;</code>, <code>&lt;video&gt;</code> or <code>&lt;table&gt;</code> as content for the <code>&lt;figure&gt;</code> element.</p>
          <img src="#" width="240" height="160" alt="Watching the Sky by Nathaniel Reinhart"><br>
          <figcaption><a href="#" title="Watching the Sky by Nathaniel Reinhart">Watching the Sky</a> by Nathaniel Reinhart (<code>&lt;figcaption&gt;</code>)</figcaption>
        </figure>
        <hr>
        <h4>Form:</h4>
        <form>
          <fieldset>
          <legend>Form legend</legend>
          <label for="text-input">Text input</label>
          <input id="text-input" type="text" placeholder="Placeholder">
          <br>
          <button title="button">Button</button>
          <br>
          <select>
            <optgroup label="Options">
              <option value="Option 1">Option 1</option>
              <option value="Option 2">Option 2</option>
              <option value="Option 3">Option 3</option>
            </optgroup>
            <optgroup label="Second Opt Grp">
              <option value="Option 4">Option 4</option>
              <option value="Option 5">Option 5</option>
              <option value="Option 6">Option 6</option>
            </optgroup>
          </select>
          <br>
          <textarea></textarea>
          <br>
          </fieldset>
        </form>
        <hr>
        <h4>Inline text formatting:</h4>
        <p>This is the <abbr title="Abbreviation">ABBR</abbr> element.</p>
        <p>This is the <b>b</b> element.</p>
        <p>This is the <cite>cite</cite> element.</p>
        <p>This is the <code>code</code> element.</p>
        <p>This is the <del>del</del> element.</p>
        <p>This is the <dfn>dfn</dfn> element.</p>
        <p>This is the <em>em</em> element.</p>
        <p>This is the <i>i</i> element.</p>
        <p>This is the <ins>ins</ins> element.</p>
        <p>This is the <kbd>kbd</kbd> element.</p>
        <p>This is the
          <mark>mark</mark>
          element.</p>
        <p>This is the <samp>samp</samp> element.</p>
        <p>This is the <small>small</small> element.</p>
        <p>This is the <strong>strong</strong> element.</p>
        <p>This is the <sub>sub</sub> element.</p>
        <p>This is the <sup>sup</sup> element.</p>
        <p>This is the <var>var</var> element.</p>
        <hr>
        <h4>Meter:</h4>
        <p>An example of the <code>&lt;meter&gt;</code> element: Your score is:
          <meter value="91" min="0" max="100" low="40" high="90" optimum="100">A+</meter>
        </p>
        <hr>
        <h4>Pre and span:</h4>
        <p>This is the <code>&lt;pre&gt;</code> element:</p>
        <pre>pre</pre>
        <p>This is the <span>span</span> element. All <code>&lt;span&gt;</code> elements within this demo are set to <span>bold</span> for styling purposes only.</p>
        <hr>
        <h4>Table:</h4>
        <table>
          <thead>
            <tr>
              <th>Table header</th>
              <th>Table header</th>
              <th>Table header</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <td>Table footer</td>
              <td>Table footer</td>
              <td>Table footer</td>
            </tr>
          </tfoot>
          <tbody>
            <tr>
              <td>Table data</td>
              <td>Table data</td>
              <td>Table data</td>
            </tr>
          </tbody>
        </table>
        <hr>
        <h4>Time:</h4>
        <p>The following is an example of the <code>&lt;time&gt;</code> element:</p>
        <time datetime="2010-03-22T11:00-06:00">11AM in Texas on March 22, 2010</time>
      </div>
      <hr>
      <footer class="article">
        <p>This is the <code>&lt;footer&gt;</code> for this <code>&lt;article&gt;</code>.</p>
        <h4><a id="info"></a>Details and summary:</h4>
        <details>
          <summary>Article Summary</summary>
          <p>Details: Here is information and links related to / referenced within this article. This uses the <code>&lt;details&gt;</code> and <code>&lt;summary&gt;</code> elements.</p>
          <ul>
            <li><a href="#" title="HTML5doctor: HTML5 Glossary">HTML5doctor: HTML5 Glossary</a></li>
            <li><a href="#" title="W3Schools: HTML 5 Tag Reference">W3Schools: HTML 5 Tag Reference</a></li>
            <li><a href="#" title="jQuery provided by Google">jQuery provided by Google</a></li>
            <li><a href="#" title="HTML5 enabling script">HTML5 enabling script</a> (for Internet Explorer)</li>
            <li><a href="#" title="jQuery.LocalScroll">jQuery.LocalScroll</a> by Ariel Flesler</li>
            <li>See source code for HTML and CSS for other references to stylesheet inspiration etc.</li>
            <li>What's next? You need to check out these:
              <ul>
                <li> <a href="#" title="Dive into HTML5">Dive into HTML5</a></li>
                <li> <a href="#" title="HTML 5 Demos and Examples">HTML 5 Demos and Examples</a> </li>
              </ul>
            </li>
          </ul>
        </details>
      </footer>
    </article>
    <footer>
      <p>This is the <code>&lt;footer&gt;</code> for this <code>&lt;section&gt; of this page/site</code>.</p>
    </footer>
  </section>

  <section>
    <header>
      <h2>Section header</h2>
    </header>
    <p>This is a <code>dl</code> <dfn>definition list</dfn> for this section</p>
    <dl>
      <dt>Term</dt>
      <dd>Definition</dd>
      <dt>Term</dt>
      <dd>Definition</dd>
      <dt>Term</dt>
      <dd>Definition</dd>
      <dt>Term</dt>
      <dd>Definition</dd>
      <dt>Term</dt>
      <dd>Definition</dd>
      <dt>Term</dt>
      <dd>Definition</dd>
      <dt>Term</dt>
      <dd>Definition</dd>
      <dt>Term</dt>
      <dd>Definition</dd>
      <dt>Term</dt>
      <dd>Definition</dd>
      <dt>Term</dt>
      <dd>Definition</dd>
    </dl>
  </section>

  <aside>
    <header>
      <h2>Aside header</h2>
    </header>
    <h3>The <code>&lt;aside&gt;</code> to the <code>&lt;section&gt;</code></h3>
    <h4>Elements included in this demo:</h4>
    <p><a id="toggle1" href="#" title="View / hide list of elements">View / hide</a> list of elements</p>
    <p><span>Note:</span> Some elements are only used within the source code and not as examples.</p>
    <ul id="list1">
      <li><code>&lt;!-- Comments --&gt;</code></li>
      <li><code>&lt;!DOCTYPE&gt;</code></li>
      <li><code>&lt;a&gt;</code></li>
      <li><code>&lt;abbr&gt;</code></li>
      <li><code>&lt;address&gt;</code></li>
      <li><code>&lt;article&gt;</code></li>
      <li><code>&lt;aside&gt;</code></li>
      <li><code>&lt;audio&gt;</code></li>
      <li><code>&lt;b&gt;</code></li>
      <li><code>&lt;blockquote&gt;</code></li>
      <li><code>&lt;body&gt;</code></li>
      <li><code>&lt;br&gt;</code></li>
      <li><code>&lt;button&gt;</code></li>
      <li><code>&lt;cite&gt;</code></li>
      <li><code>&lt;code&gt;</code></li>
      <li><code>&lt;del&gt;</code></li>
      <li><code>&lt;details&gt;</code></li>
      <li><code>&lt;dfn&gt;</code></li>
      <li><code>&lt;div&gt;</code></li>
      <li><code>&lt;em&gt;</code></li>
      <li><code>&lt;fieldset&gt;</code></li>
      <li><code>&lt;figcaption&gt;</code></li>
      <li><code>&lt;figure&gt;</code></li>
      <li><code>&lt;footer&gt;</code></li>
      <li><code>&lt;form&gt;</code></li>
      <li><code>&lt;h1&gt;</code> &ndash; <code>&lt;h6&gt;</code></li>
      <li><code>&lt;head&gt;</code></li>
      <li><code>&lt;header&gt;</code></li>
      <li><code>&lt;hgroup&gt;</code></li>
      <li><code>&lt;hr&gt;</code></li>
      <li><code>&lt;html&gt;</code></li>
      <li><code>&lt;i&gt;</code></li>
      <li><code>&lt;img&gt;</code></li>
      <li><code>&lt;input&gt;</code></li>
      <li><code>&lt;ins&gt;</code></li>
      <li><code>&lt;kbd&gt;</code></li>
      <li><code>&lt;label&gt;</code></li>
      <li><code>&lt;legend&gt;</code></li>
      <li><code>&lt;li&gt;</code></li>
      <li><code>&lt;link&gt;</code></li>
      <li><code>&lt;mark&gt;</code></li>
      <li><code>&lt;meta&gt;</code></li>
      <li><code>&lt;meter&gt;</code></li>
      <li><code>&lt;nav&gt;</code></li>
      <li><code>&lt;noscript&gt;</code></li>
      <li><code>&lt;ol&gt;</code></li>
      <li><code>&lt;optgroup&gt;</code></li>
      <li><code>&lt;option&gt;</code></li>
      <li><code>&lt;p&gt;</code></li>
      <li><code>&lt;pre&gt;</code></li>
      <li><code>&lt;q&gt;</code></li>
      <li><code>&lt;samp&gt;</code></li>
      <li><code>&lt;script&gt;</code></li>
      <li><code>&lt;section&gt;</code></li>
      <li><code>&lt;select&gt;</code></li>
      <li><code>&lt;small&gt;</code></li>
      <li><code>&lt;source&gt;</code></li>
      <li><code>&lt;span&gt;</code></li>
      <li><code>&lt;strong&gt;</code></li>
      <li><code>&lt;style&gt;</code></li>
      <li><code>&lt;sub&gt;</code></li>
      <li><code>&lt;summary&gt;</code></li>
      <li><code>&lt;sup&gt;</code></li>
      <li><code>&lt;table&gt;</code></li>
      <li><code>&lt;tbody&gt;</code></li>
      <li><code>&lt;td&gt;</code></li>
      <li><code>&lt;textarea&gt;</code></li>
      <li><code>&lt;tfoot&gt;</code></li>
      <li><code>&lt;th&gt;</code></li>
      <li><code>&lt;thead&gt;</code></li>
      <li><code>&lt;time&gt;</code></li>
      <li><code>&lt;title&gt;</code></li>
      <li><code>&lt;tr&gt;</code></li>
      <li><code>&lt;ul&gt;</code></li>
      <li><code>&lt;var&gt;</code></li>
      <li><code>&lt;video&gt;</code></li>
      <li><code>&lt;dd&gt;</code></li>
      <li><code>&lt;dl&gt;</code></li>
      <li><code>&lt;dt&gt;</code></li>
    </ul>
    <h4>Elements not included in this demo:</h4>
    <p><a id="toggle2" href="#" title="View / hide list of elements">View / hide</a> list of elements</p>
    <ul id="list2">
      <li><code>&lt;area&gt;</code></li>
      <li><code>&lt;base&gt;</code></li>
      <li><code>&lt;bdo&gt;</code></li>
      <li><code>&lt;canvas&gt;</code></li>
      <li><code>&lt;caption&gt;</code></li>
      <li><code>&lt;col&gt;</code></li>
      <li><code>&lt;colgroup&gt;</code></li>
      <li><code>&lt;command&gt;</code></li>
      <li><code>&lt;datalist&gt;</code></li>
      <li><code>&lt;embed&gt;</code></li>
      <li><code>&lt;iframe&gt;</code></li>
      <li><code>&lt;keygen&gt;</code></li>
      <li><code>&lt;map&gt;</code></li>
      <li><code>&lt;menu&gt;</code></li>
      <li><code>&lt;object&gt;</code></li>
      <li><code>&lt;output&gt;</code></li>
      <li><code>&lt;param&gt;</code></li>
      <li><code>&lt;progress&gt;</code></li>
      <li><code>&lt;rp&gt;</code></li>
      <li><code>&lt;rt&gt;</code></li>
      <li><code>&lt;ruby&gt;</code></li>
    </ul>
    <h4>Elements not supported by HTML5:</h4>
    <p><a id="toggle3" href="#" title="View / hide list of elements">View / hide</a> list of elements</p>
    <ul id="list3">
      <li><code>&lt;acronym&gt;</code></li>
      <li><code>&lt;applet&gt;</code></li>
      <li><code>&lt;basefont&gt;</code></li>
      <li><code>&lt;big&gt;</code></li>
      <li><code>&lt;center&gt;</code></li>
      <li><code>&lt;dir&gt;</code></li>
      <li><code>&lt;font&gt;</code></li>
      <li><code>&lt;frame&gt;</code></li>
      <li><code>&lt;frameset&gt;</code></li>
      <li><code>&lt;noframes&gt;</code></li>
      <li><code>&lt;s&gt;</code></li>
      <li><code>&lt;strike&gt;</code></li>
      <li><code>&lt;tt&gt;</code></li>
      <li><code>&lt;u&gt;</code></li>
      <li><code>&lt;xmp&gt;</code></li>
    </ul>
  </aside>

  <footer>
    <header>
      <h2>Footer header</h2>
    </header>
    <p>This is the global <code>&lt;footer&gt;</code> for this page/site.</p>
    <nav>
      <ul>
        <li><a href="#" title="Global footer link">Global footer <code>&lt;nav&gt;</code> link</a></li>
        <li><a href="#" title="Global footer link">Global footer <code>&lt;nav&gt;</code> link</a></li>
        <li><a href="#" title="Global footer link">Global footer <code>&lt;nav&gt;</code> link</a></li>
      </ul>
    </nav>
    <p>This document was prepared by <a href="#" title="Get started with HTML5">the Ackernaut</a> for the benefit of the web development community. <br>
      If you have suggestions on how to improve this page let me know: terry / at / ackernaut / dot / com<br>
      Feel free to borrow and share a link! <br>
      Created on March 22, 2010 | Last updated on April 9, 2010</p>
  </footer>
</div>