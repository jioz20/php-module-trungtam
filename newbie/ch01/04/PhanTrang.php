<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>Pagination</title>
 <style type="text/css">
  
  #tnt_pagination {
  display: inline-block;
  text-align: left;
  height: 22px;
  line-height: 21px;
  clear: both;
  padding-top: 3px;
  font-family: Arial, Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 12px;
  font-weight: normal;
  text-decoration: white;
  }
  
  #tnt_pagination a:link, #tnt_pagination a:visited{
  padding: 7px;
  padding-top: 2px;
  padding-bottom: 2px;
  border: 1px solid #EBEBEB;
  margin-left: 10px;
  text-decoration: white;
  background color: #F5F5F5;
  color: #0072bc;
  width: 22px;
  font-weight: normal; 
  }

  #tnt_pagination a:hover{
  background-color: #DDEEFF;
  border: 1px solid#BBDDFF;
  color: #0072BC; 
  }

  #tnt_pagination .active_tnt_link{
  padding: 7px;
  padding-top: 2px;
  padding-bottom: 2px;
  horder: 1px solid #DDEEFF;
  margin-left: 10px;
  text-decoration: none;
  background-color: #DDEEFF;
  color: #0072BC;
  cursor: default; 
  }

  #tnt_pagination .disabled_tnt_pagination{
  padding: 7px;
  padding-top: 2px;
  padding-bottom: 2px;
  border: 1px solid #EBEBEB;
  margin-left: 10px;
  text-decoration: none;
  background-color: #FSFSFS;
  color: #D7D7DD7;
  cursor: default;
  }

  .content 
  	{
    margin: 10px auto;
    width: 800px;
    text-align: center;
    border: 1px solid #dfa; 
    }
 </style>
</head>
<body>
  <div class = "content">
    <div id = "tnt_pagination">
      <span class = "disabled_tnt_pagination">Prev</span>
      <a href = "PhanTrang.php?page=1">1</a>
      <a href = "PhanTrang.php?page=2">2</a>
      <a href = "PhanTrang.php?page=3">3</a>
      <a href = "PhanTrang.php?page=4">4</a>
      <a href = "PhanTrang.php?page=5">5</a>
      <a href = "PhanTrang.php?page=6">6</a>
      <a href = "PhanTrang.php?page=7">7</a>
      <a href = "PhanTrang.php?page=8">Next</a>
    </div>
    <?php 
        $page = (isset($_REQUEST["page"]) == true) ? $_REQUEST["page"] : "Không có trang hiển thị"; 
        //isset(khởi tạo hay chưa) 
        //empty(kiểm tra giá trị rỗng hoặc là có khởi tạo hay không)
    ?>
    <p class = "result"> Bạn đang ở trang thứ 
    <?php  
        echo $page;
    ?> </p>
  </div>
</body>
</html>﻿