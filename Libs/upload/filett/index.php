<?php 
var_dump($_POST);
$ten = $_POST['newname'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>File mananger</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.mg-bot-20 {
	margin-bottom: 20px;
}
.contentfile{
	padding-top:20px;
}
.contentfile >.mg-bot-20{
	min-height:146px;
}
.filemenu{
	list-style: none;
    background: #002bffbd;
    border-radius: 5px;
    position: absolute;
    padding: 10px;
    top: 0px;
    right: -10px;
	display:none;
}
.filemenu a{
	color:#fff;	
}
.contentfile >.mg-bot-20:hover>.filemenu{
	display:block;
}
</style>
</head>

<body>
<div class="container">
  <form action="" method="post" enctype="multipart/form-data">
    <div class="input-group"> <span class="input-group-addon">Chọn file</span>
      <input type="file" class="form-control" name="file">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-paperclip"></i> Upload</button>
      </div>
    </div>
  </form>
</div>
<div class="container">
  <div class="row contentfile">
  <?php 

$fdpath =(isset($_GET['fd']) && $_GET['fd'])?$_GET['fd']: 'file' ;
if(!file_exists($fdpath)) 
	$fdpath = 'file';
$fd = opendir($fdpath);
while($item  = readdir($fd))
{
	if($item != '.'  &&  $item != '..' && $item !='Thumbs.db'){
		$fullpath = $fdpath.'/'.$item;
		if(is_file($fullpath))
    {
			$ar = explode('.',$item);
			$ext = $ar[count($ar)-1];
			$fullpath2 = $fullpath;
			if(!in_array($ext,array('jpg','png','gif')))
				$fullpath2 = 'images/'.$ext.'.png';
  ?>
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 mg-bot-20" > 
    	<img class="img-responsive" src="<?php echo $fullpath2 ?>"/>
      	<div class="text-danger text-center"><?php echo $item ?></div>
        <ul class="filemenu">
        	<li><a href="#">Xóa</a></li>
            <li><a href="#" data-src="<?php echo $fullpath ?>" class="doiten"></a></li>
            <li><a href="#">Di chuyển</a></li>
        </ul>
    </div>   
    <?php } else{ ?>
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 mg-bot-20" >     	
      <div class="text-danger text-center">
      	<a href="?fd=<?php echo $fullpath ?>"> <img class="img-responsive" src="images/fd.png"/></a>
      	<?php echo $item ?>
      </div>
    </div>
  <?php   
		}
	}
}
?>
  </div>
</div>
 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content">
      <form action="" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Nhập tên mới</h4>
        </div>
        <div class="modal-body">
			Nhập tên: <input id="oldname" type="hidden" name="oldname" value="<?php rename($fullpath,$fdpath.'/'.$ten) ?>" />
        </div>
        <div class="modal-footer">
         <button type="submit" class="btn btn-default" >Lưu</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Bỏ qua</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  
<script>

function kiemtra()
{
  $val = $('#newname').val();
  //tao bieu thuc kiem tra ten hinh nhap vao cua ng dung
  $partten = /^[a-z]{5,10}$/;
  if($partten.test($val))
    alert('nhap dung')
  else
   alert('nhap sai'); 
  //check du lieu truoc khi returns
  return false;
}
</script>
 <script>
$(document).ready(function(){
    $(".doiten").click(function()
    {
		$('#oldname').val($(this).data('src'));
        $("#myModal").modal();
    });
});
</script>
<script>
//kiem tra nội dung trang html đã được tải lên xong chưa
$(document).ready(function()
{
//alert('chay truoc');
//js khong co vong lap foreach
//truy xuat toi doi tượng có class = "doiten" và đồng thời phát sinh sự onclick vào danh sách đối tượng này
    function thongbao()
    {
    //alert(123);
    }
  $(".doiten").click(function()
  {
    thongbao();
    //truy xuat toi id="oldname" và cai dat gia tri value= gia trị lấy từ 
    //thuộc tính data-src của dôi tuong co class ="doiten" mà đang đc nhấn vào
    $('#oldname').val($(this).data('src'));
    //nhu tren
    $('#path').val($(this).data('path'));
    //goi modal tu boostrap ra xài
    $("#myModal").modal();
  });

    $('#a').click(function()
    {
    alert($(this).html());
//append: +=
    $(this).append('noi dung moi');// $(this).data('ten'');
    //dinh danh nut lai
    $(this).css({'color':'#F00','background':'#666'});
    });
});
</script>
</body>
</html>