var OrganiseProjects = (function(){
    var libPath = "_lib/",
        vendorPath = libPath + "vendor/",
        tomataoPath = libPath + "tomatao/";

    return {
        baseUrl: './js',
        map: {
            '*': {
                'css':vendorPath + "css"
            } 
        },
        paths: {
            "text": vendorPath + "text"
            ,"jquery": vendorPath + "jquery"
            
            ,"functions": tomataoPath + "functions"
        }
    };
}());