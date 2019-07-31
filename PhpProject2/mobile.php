<?php
require_once 'php/db.php';
require_once 'php/functions.php';
$datas= get_article_mobile($_GET['i']);
?>
<!DOCTYPE html>
<html lang="zh-TW">
  <head>
      <meta charset="utf-8" />
    <title><?php echo $datas['Title'];?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by 365Bootstrap dot com - Free Responsive Html5 Templates">
    <link rel="stylesheet" href="css/style3.css"/>
    <link rel="shortcut icon" href="images/1.jpg">
  
	<!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"  type="text/css">
	
	<!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
	
	
	<!-- Custom Fonts -->
    <link rel="stylesheet" href="font-awesome-4.4.0/css/font-awesome.min.css"  type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>
  </head>

  <body>
    <!-- 頁首 -->


            <!-- 選單 -->
            <?php include_once 'menu.php';?>
          </div>
        </div>
      </div>
    </div>
    <!-- 網站內容 -->
    <div class="content">
      <div class="container">
        <!-- 建立第一個 row 空間，裡面準備放格線系統 -->
        <div class="row">
          <!-- 在 xs 尺寸，佔12格，可參考 http://getbootstrap.com/css/#grid 說明-->
          <div class="col-xs-12">
            
               <font size="9" face="標楷體" color="biue"> <h1><?php echo $datas['Title'];?></h1>
              <hr>
              <div class="row">                  
      <div class="thumbnail">      
           <img src="<?php echo $datas['Image_path'];?> " >
  </div>
  </div>
              
                            <div class="row">                  
            
           <div class="embed-responsive embed-responsive-16by9">
               <iframe class="embed-responsive-item" src="<?php echo $datas ['Video_path']?>"></iframe>
            
        </div>
  </div>
  </div>
          <div class="col-xs-12"> 
             <font size="5" face="標楷體" color="#000000"><?php echo $datas['Content'];?></font>
            </div>
          <div class="col-xs-12">
              <a href="<?php echo $datas ['Official website']?>">官方網站</a>
          </div>
          <div class="col-xs-12">
              <div class="row">
          <div class="fb-like" data-href="http://localhost:8000" data-layout="button" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
          
          </div>
              </div>
            </div>
          </div>
        </div>
      

                  <div class="row">                  
      <div class="thumbnail">
          <div class="container">
           <div class="fb-comments" data-href="http://localhost:8000/" data-width="650" data-numposts="3"></div>           
           
  </div>
  </div>
    </div>

    <!-- 頁底 -->
    <div class="footer">
      <div class="container">
        <!-- 建立第一個 row 空間，裡面準備放格線系統 -->
        <div class="row">
          <!-- 在 xs 尺寸，佔12格，可參考 http://getbootstrap.com/css/#grid 說明-->
          <div class="col-xs-12">
            <p class="text-center">
                 <font size="3"><?php include_once 'footer.php';?>
            </p>
          </div>
        </div>
      </div>
 <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : 'your-app-id',
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/zh_TW/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.9&appId=344851945898714";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    </div>

    <?php
    //結束mysql連線
    //mysql_close();
    ?>
  </body>
</html>

