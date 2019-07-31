<?php
require_once '../php/db.php';
require_once '../php/functions.php';
$datas = get_publish_member();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>遊戲資訊網</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Admin panel developed with the Bootstrap from Twitter.">
    <meta name="author" content="travis">

    <link href="../css2/bootstrap.css" rel="stylesheet">
    <link href="../css2/site.css" rel="stylesheet">
    <link href="../css2/bootstrap-responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">遊戲資訊網</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">管理者 <b class="caret"></b></a>
				<ul class="dropdown-menu">
                                    <li><a href="member_add.php">新增管理者</a></li>
					<li class="divider"></li>
					<li><a href="member_list.php">管理者清單</a></li>
				</ul>
			  </li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">文章 <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="pc_list.php">PC</a></li>
					<li><a href="tv_list.php">TV</a></li>
					<li><a href="mobile_list.php">Mobile</a></li>
				</ul>
              <li>
               <a href="../php/logout.php">登出</a>   
              </li>
			  
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span9">
          <div class="well hero-unit">
            <h1>歡迎,管理員</h1>            
          </div>
		  <br />
		  <div class="row-fluid">
			<div class="page-header">
				<h1>管理者列表 <small>你可以修改或刪除管理者</small></h1>
			</div>                      
			<table class="table table-bordered">
				<thead>
					<tr>
                              <th>帳號</th>
                              <th>密碼</th>
                              <th>姓名</th>
                              <th>編輯/刪除</th>
					</tr>
				</thead>
				<?php if(!empty($datas)):?>                          
                          <?php foreach($datas as $a_data):?>
                          <tr>
                              <td><?php echo $a_data['username']?></td>
                              <td><?php echo $a_data['password']?></td>
                              <td><?php echo $a_data['name']?></td>
                              <td>
                                  <a href="member_edit.php?i=<?php echo $a_data['id'];?>" class="btn btn-warning">編輯</a>
                                  <a href="javascript:void(0);" class="btn btn-danger pc_delect" data-id="<?php echo $a_data['id'];?>">刪除</a>
                              </td>
                          </tr>
                          <?php endforeach;?>
                          <?php else:?>                         
                            <tr>
                              <td colspan="4">無資料</td>
                          </tr>
                          <?php endif;?>
			</table>
		  </div>
        </div>
      </div>

      <hr>
      

    </div>

      <script src="js2/jquery.js"></script>
      <script src="js2/bootstrap.min.js"></script>
       <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
    	$(document).on("ready", function(){
    		//表單送出
                $("a.pc_delect").on("click", function(){
                    var c = confirm("確定刪除?");
                    console.log($(this).attr("data-id")),
                    this_tr = $(this).parent().parent();
                    if(c)
                    {
                      $.ajax({
	            type : "POST",
	            url : "../php/del_member.php", //因為此檔案是放在 admin 資料夾內，若要前往 php，就要回上一層 ../ 找到 php 才能進入 add_article.php
	            data : {
                      id : $(this).attr("data-id")
	              
	            },
	            dataType : 'html' //設定該網頁回應的會是 html 格式
	          }).done(function(data) {
	            //成功的時候
	            
	            if(data == "yes")
	            {
	              //註冊新增成功，轉跳到登入頁面。
	              alert("刪除成功，點擊確認");
	              this_tr.fadeOut();
	            }
	            else
	            {
	              alert("刪除錯誤");
	            }
	            
	          }).fail(function(jqXHR, textStatus, errorThrown) {
	            //失敗的時候
	            alert("有錯誤產生，請看 console log");
	            console.log(jqXHR.responseText);
	          });  
                    }
                    
                });
    	});
    </script>
    <script src="../js2/jquery.js"></script>
	<script src="../js2/bootstrap.min.js"></script>
  </body>
</html>
