<?php
require_once 'php/db.php';
require_once 'php/functions.php';
$datas= get_publish_pc();
?>
<html>
<head>
  <!-- META DATA -->
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by 365Bootstrap dot com - Free Responsive Html5 Templates">
    <link rel="stylesheet" href="css/style3.css"/>
    <link rel="shortcut icon" href="images/1.jpg">

	<title>PC Play</title>
  
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
		<div id="carousel-example-generic" class="carousel slide row hidden-xs" data-ride="carousel" data-interval="4000">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
		 
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="http://redcandlegames.com/detention/detention.png" alt="..." style="width:100%">
				</div>
				<div class="item">
					<img src="http://pic.k73.com/up/soft/2016/0508/094116_92304702.jpg" alt="..." style="width:100%">
				</div>
				<div class="item">
					<img src="https://i.ytimg.com/vi/9ybyHLfZMVE/maxresdefault.jpg" alt="..." style="width:100%">
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

	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="index-page container">
            <?php if(!empty($datas)):?>
<?php foreach ($datas as $row):?>
        <?php
        $abstract = strip_tags($row['Content']);
        $abstract = mb_substr($abstract, 0, 200, "UTF-8");
        ?>
        <div class="row">
  <div class="col-sm6 col-md-12"><!-- 在 sm 尺寸，佔6格，在 md 尺寸，佔8格，可參考 http://getbootstrap.com/css/#grid 說明-->
    <div class="thumbnail">
      <!-- 內文content-->      
        <img src="<?php echo $row['Image_path'];?> ">        
      <div class="panel-heading">
         <h3><?php echo $row['Title'];?> </h3> 
      </div>
        <div class="panel-category">
            <p>
                <span class="label label-info"><?php echo $row['Platform'];?></span>
            </p>
            <!-- 內文content-->
            <?php echo $abstract;?>
            <a href='mobile.php?i=<?php echo $row['ID'];?>'>....更多</a>
      </div>
    </div>
  </div>
</div>
<?php endforeach;?>
      
      <?php endif;?>	
</div>
	
	<!-- FOOTER -->
	<?php include_once 'footer.php';?>
  
	<!-- jQuery -->
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
</body>
</html>