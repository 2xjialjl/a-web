<?php
//載入 db.php 檔案，讓我們可以透過它連接資料庫，另外後台都會用 session 判別暫存資料，所以要請求 db.php 因為該檔案最上方有啟動session_start()。
require_once '../php/db.php';
require_once '../php/functions.php';
//print_r($_SESSION); //查看目前session內容

//如過沒有 $_SESSION['is_login'] 這個值，或者 $_SESSION['is_login'] 為 false 都代表沒登入
if(!isset($_SESSION['is_login']) || !$_SESSION['is_login'])
{
	//直接轉跳到 login.php
	header("Location: login.php");
}

//取得文章資料，從網址上的 i 取得文章id
$data = get_pc($_GET['i']);

?>
<!DOCTYPE html>
<html lang="zh-TW">
  <head>
    <title>新增文章後台</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- 給行動裝置或平板顯示用，根據裝置寬度而定，初始放大比例 1 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 載入 bootstrap 的 css 方便我們快速設計網站-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css"/>
    <link rel="shortcut icon" href="../images/1.jpg">
  </head>

  <body>
    <!-- 頁首 -->		
    <!-- 網站內容 -->
    <div class="content">
      <div class="container">
        <!-- 建立第一個 row 空間，裡面準備放格線系統 -->
        <div class="row">
          <!-- 在 xs 尺寸，佔12格，可參考 http://getbootstrap.com/css/#grid 說明-->
          <div class="col-xs-12">
            <form id="add_pc_form">
                <input type="hidden" id="id" value="<?php echo $data['ID'];?>">
              <div class="form-group">
                <label for="title">標題</label>
                <input type="input" class="form-control" id="title" value="<?php echo $data['Title'];?>">
              </div>
               <div class="form-group">
                <label for="category">分類</label>
                <select id="category" class="form-control">
                    <option value="動作" <?php echo($data['Category'] == "動作")?'selected':'';?>>角色扮演</option>
                  <option value="射擊" <?php echo($data['Category'] == "射擊")?'selected':'';?>>射擊</option>
                  <option value="動作" <?php echo($data['Category'] == "動作")?'selected':'';?>>動作</option>
                  <option value="益智" <?php echo($data['Category'] == "益智")?'selected':'';?>>益智</option>
                  <option value="運動競速" <?php echo($data['Category'] == "運動競速")?'selected':'';?>>運動競速</option>
                  <option value="策略模擬" <?php echo($data['Category'] == "策略模擬")?'selected':'';?>>策略模擬</option>
                </select>
              </div>
                               <div class="form-group">
                                   <label for="platform">平台</label>
                <select id="platform" class="form-control">
                  <option value="PC" <?php echo($data['Platform'] == "PC")?'selected':'';?>>PC</option>
                  <option value="TV" <?php echo($data['Platform'] == "TV")?'selected':'';?>>TV</option>
                  <option value="Mobile" <?php echo($data['Platform'] == "Mobile")?'selected':'';?>>Mobile</option>
                </select>
              </div>
                <div class="form-group">
                <label for="image">圖片路徑</label>
                <input type="input" class="form-control" id="image" value="<?php echo $data['Image_path'];?>">
              </div>
                <div class="form-group">
                <label for="video">影片路徑</label>
                <input type="input" class="form-control" id="video" value="<?php echo $data['Video_path'];?>">
              </div>
                <div class="form-group">
                <label for="offic">官方網站</label>
                <input type="input" class="form-control" id="offic" value="<?php echo $data['Official website'];?>">
              </div>
              <div class="form-group">
                <label for="content">內容</label>
                <textarea type="input" class="form-control" id="content" rows="7"><?php echo $data['Content'];?></textarea>
              </div>

              <button type="submit" class="btn btn-default">送出</button>
              <div class="loading text-center"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
		
    <!-- 頁底 -->
    <?php include_once 'footer.php'; ?>
    
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
    	$(document).on("ready", function(){
    		//表單送出
    		$("#add_pc_form").on("submit", function(){
    			//加入loading icon
    			$("div.loading").html('<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>');
    			
    			if($("#title").val() == '' || $("#content").val() == ''){
    				alert("請填入標題或內文");
    				
    				//清掉 loading icon
    				$("div.loading").html('');
    			}else{
					  //使用 ajax 送出 帳密給 verify_user.php
						$.ajax({
	            type : "POST",
	            url : "../php/update_pc.php", //因為此檔案是放在 admin 資料夾內，若要前往 php，就要回上一層 ../ 找到 php 才能進入 add_article.php
	            data : {
                      id : $("#id").val(),
	              title : $("#title").val(), //使用者帳號
	              category : $("#category").val(), //使用者帳號
	              content : $("#content").val(), //使用者帳號
	              platform : $("#platform").val(),
                      image : $("#image").val(),
                      video : $("#video").val(),
                      offic : $("#offic").val()
	            },
	            dataType : 'html' //設定該網頁回應的會是 html 格式
	          }).done(function(data) {
	            //成功的時候
	            
	            if(data == "yes")
	            {
	              //註冊新增成功，轉跳到登入頁面。
	              alert("更新成功，點擊確認回列表");
	              window.location.href = "pc_list.php";
	            }
	            else
	            {
	              alert("更新錯誤");
	            }
	            
	          }).fail(function(jqXHR, textStatus, errorThrown) {
	            //失敗的時候
	            alert("有錯誤產生，請看 console log");
	            console.log(jqXHR.responseText);
	          });
    			}
    			return false;
    		});
    	});
    </script>
  </body>
</html>
