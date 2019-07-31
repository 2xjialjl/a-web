<?php
//載入 db.php 檔案，讓我們可以透過它連接資料庫，另外後台都會用 session 判別暫存資料，所以要請求 db.php 因為該檔案最上方有啟動session_start()。
require_once '../php/db.php';
//print_r($_SESSION); //查看目前session內容

//如過沒有 $_SESSION['is_login'] 這個值，或者 $_SESSION['is_login'] 為 false 都代表沒登入
if(!isset($_SESSION['is_login']) || !$_SESSION['is_login'])
{
	//直接轉跳到 login.php
	header("Location: login.php");
}
?>
<html lang="zh-TW">
  <head>
    <title>後台</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- 給行動裝置或平板顯示用，根據裝置寬度而定，初始放大比例 1 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 載入 bootstrap 的 css 方便我們快速設計網站-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/style.css"/>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../images/1.jpg">
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
            <h1 class="text-center">後台</h1>

            <!-- 選單 -->
<?php include_once 'menu.php';?>
        </div>
      </div>
    </div>
     <!-- 網站內容 -->    
        <div class="row">
  <div class="col-sm6 col-md-12"><!-- 在 sm 尺寸，佔6格，在 md 尺寸，佔8格，可參考 http://getbootstrap.com/css/#grid 說明-->
    <div class="thumbnail">
    </div>
  </div>
        </div>
        
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

