<html>
<head>
  <!-- META DATA -->
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by 365Bootstrap dot com - Free Responsive Html5 Templates">
    <link rel="stylesheet" href="css/style3.css"/>
    <link rel="shortcut icon" href="images/1.jpg">

	<title>遊戲資訊網</title>
  
	<!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"  type="text/css">
	
	<!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
	
	
	<!-- Custom Fonts -->
    <link rel="stylesheet" href="font-awesome-4.4.0/css/font-awesome.min.css"  type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
	
</head>

 <body>
<header>
  <!-- ########################### -->
  <div class="top container">
    <div class="row">
      <div class="col-md-12">
          <img class="toplogo" src="images/2.png"/>
      </div>
    </div>
  </div>

  <!-- ############################## -->
<?php include_once 'menu.php';?>

	<div class="container">
		<!-- CAROUSEL -->
		<div id="carousel-example-generic" class="carousel slide row hidden-xs" data-ride="carousel" data-interval="4000">			<!-- Indicators -->
			
		 
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="http://tw.x-legend.com/gf/images/FB/fb_161228.jpg" alt="..." style="width:100%">
				</div>
				<div class="item">
					<img src="https://i.ytimg.com/vi/au3LQmadyUg/maxresdefault.jpg" alt="..." style="width:100%">
				</div>
				<div class="item">
					<img src="https://i.ytimg.com/vi/KsT8flNuF1I/maxresdefault.jpg" alt="..." style="width:100%">
				</div>
			</div>
		 
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div> <!-- Carousel -->
	</div>
</header>
     <div class="main">
      <div class="container">
        <!-- 建立第一個 row 空間，裡面準備放格線系統 -->
        <div class="row">
          <!-- 在 xs 尺寸，佔12格，可參考 http://getbootstrap.com/css/#grid 說明-->
          <div class="col-xs-12">            
              <font color="blue"><h1 class="text-center">官方遊戲新知</h1></font>                        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <center>
    <body>
     <a class="twitter-timeline" data-lang="zh-tw" data-width="300" data-height="500" data-theme="dark" data-link-color="#19CF86" href="https://twitter.com/Twitch">Tweets by Twitch </a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>  
    </body>
    <head>                
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       <a class="twitter-timeline" data-lang="zh-tw" data-width="300" data-height="500" data-theme="dark" data-link-color="#19CF86" href="https://twitter.com/steam_games">Tweets by steam_games</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>  
    </body>
    <head>                
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
     <a class="twitter-timeline" data-lang="zh-tw" data-width="300" data-height="500" data-theme="dark" data-link-color="#19CF86" href="https://twitter.com/PlayStation">Tweets by PlayStation</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>    
    </body>
    </center>
    </body>
          </div>
        </div>
      </div>
         <?php include_once 'footer.php';?>
</div>
     <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
	<script>
		if ($(window).width() < 1199) {
			$('#sidebar').affix({
			  offset: {
				top: 398
			  }
			}); 
		} else {
			$('#sidebar').affix({
			  offset: {
				top: 442
			  }
			}); 
		}

		$(function() {
			$('#nav-wrapper').height($("#nav").height());
			
			$('#nav').affix({
				offset: { top: $('#nav').offset().top }
			});
		});
	</script>
	
	<!-- carousel -->
	<script src="owl-carousel/owl.carousel.js"></script>
    <script>
    $(document).ready(function() {
      $("#owl-demo1").owlCarousel({
        autoPlay: 3000,
        items : 3,
		itemsDesktop : [1199,2],
        itemsDesktopSmall : [979,2]
      });
	  $("#owl-demo2").owlCarousel({
        autoPlay: 3000,
        items : 3,
		itemsDesktop : [1199,2],
        itemsDesktopSmall : [979,2]
      });
    });
    </script>
</html>
</body>