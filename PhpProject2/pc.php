<?php
require_once 'php/db.php';
require_once 'php/functions.php';
$datas= get_article_pc($_GET['i']);
?>
<!DOCTYPE html>
<html lang="zh-TW">
  <head>
    <title><?php echo $datas['Title'];?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- 給行動裝置或平板顯示用，根據裝置寬度而定，初始放大比例 1 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 載入 bootstrap 的 css 方便我們快速設計網站-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="shortcut icon" href="images/1.jpg">
  </head>

  <body>
    <!-- 頁首 -->

    <div class="jumbotron">
      <div class="container">
        <!-- 建立第一個 row 空間，裡面準備放格線系統 -->
        <div class="row">
          <!-- 在 xs 尺寸，佔12格，可參考 http://getbootstrap.com/css/#grid 說明-->
          <div class="col-xs-12">
                          <!--網站標題-->
            <h1 class="text-center">遊戲資訊網</h1>
            
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
            
              <font size="8" face="微軟正黑體"><?php echo $datas['Title'];?></h1></font>
              </div>
              <hr>
              <div class="row">
  <div class="col-xs-6 col-md-3">
<img src="<?php echo $datas['Image_path'];?> ">
  </div>
</div>
              <font size="5" face="標楷體"><?php echo $datas['Content'];?></font>
            </div>
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
              <?php include_once 'footer.php';?>
            </p>
          </div>
        </div>
      </div>

    </div>

    <?php
    //結束mysql連線
    //mysql_close();
    ?>
  </body>
</html>
