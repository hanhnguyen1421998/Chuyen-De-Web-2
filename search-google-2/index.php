<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    
    $less = new lessc;
    $less->compileFile('less/1111.less', 'css/1111.css');
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Google Search</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo $url_path ?>/css/1111.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo $url_path ?>/js/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo $url_path ?>/js/bootstrap.min.js" type="text/javascript"></script>
         <script type="text/javascript" src="<?php echo $url_path ?>/js/script.js"></script>
        <script>
          (function() {
            var cx = '015735391145657819826:l6f8ycxn8jk';
            var gcse = document.createElement('script');
            gcse.type = 'text/javascript';
            gcse.async = true;
            gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(gcse, s);
          })();(function($, window) {

// xử lí sự kiện sau khi search
  var elementName = '';
  var initGCSEInputField = function() {
    $('.gcse-container form.gsc-search-box input.gsc-input').on("keyup", function(e){
      if(e.which == 13) { // 13 = enter
        var searchTerm = $.trim(this.value);
        if(searchTerm != '') {
       
                  // luu du lieu qua json
                    $.ajax({
                    url: 'key.php',
                    type: 'POST',
                    data: {key:searchTerm},
                    success: function (data) {
                       console.log(data);
                    },
                    error: function (e) {
                        console.log(e.message);
                    }
                });
              }
      }
    });

    $('.gsc-search-button').on("click",function(e){
      var searchTerm = $.trim( $('.gcse-container form.gsc-search-box input.gsc-input').val());
      if( searchTerm != '' ) {
       

      }
    });

  };
  
  var GCSERender = function() {
    google.search.cse.element.render({
        div: 'gcse_container',
        tag: 'search'
      });
      initGCSEInputField();
  };
  
  var GCSECallBack = function() {
    if (document.readyState == 'complete') {
      GCSERender();
    }
    else {
      google.setOnLoadCallback(function() {
        GCSERender();
      }, true );
    }
  };
  
  window.__gcse = {
    parsetags: 'explicit',
    callback: GCSECallBack
  };
})(jQuery, window);
    </script>

     <script type="text/javascript">
            
            function CallAjax() {

              // get links
                var links = document.getElementsByTagName('a'), hrefs = [];

                  for (var i = 0; i<links.length; i++)
                  {   
                      hrefs.push(links[i].href);

                  }
                  var list_link=[];
                  for(var i=1;i<links.length;i++){
                     // console.log(links[i].href);
                      list_link.push(links[i].href);
                      i+=3;
                  }

                // get content search
                var content = document.getElementsByClassName('gs-bidi-start-align');
                var arr_content = [];
                for (var i = 0; i<content.length; i++)
                                  {   
                                      arr_content.push(content[i].innerHTML);
                                  }
                var list_content=[];
                                  for(var i=2;i<content.length;i++){
                                     // console.log(links[i].href);
                                      list_content.push(content[i].innerHTML);
                                      i+=4;
                                  }

                //lay title

                var title = document.getElementsByTagName('a');
                var arr_title = [];

                  for (var i = 0; i<title.length; i++)
                  {   
                      arr_title.push(title[i].innerHTML);

                  }
                  var list_title=[];
                  for(var i=1;i<title.length;i++){
                     // console.log(links[i].href);
                      list_title.push(title[i].innerHTML);
                      i+=3;
                  }

               

                //get image

                var imgae = document.getElementsByTagName('img');
                var arr_img= [];

                                  for (var i = 0; i<imgae.length; i++)
                                  {   
                                      arr_img.push(imgae[i].src);

                                  }
                var list_img=[];
                                  for(var i=1;i<imgae.length;i++){
                                  
                                      list_img.push(imgae[i].src);
                                  }

                                  

                  // luu du lieu qua json
                    $.ajax({
                    url: 'data.php',
                    type: 'POST',
                    data: {links:list_link, content:list_content, title:list_title, image:list_img},
                    success: function (data) {
                       console.log(data);
                    },
                    error: function (e) {
                        console.log(e.message);
                    }
                });

            }
        </script>
        
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>



    </head>
    <body>
        <?php  include $dir_block.'/1111-content.php'; ?>
         

    </body>
</html>

<!-- 

