
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
      <input type="file" class="form-control" name="file[]" multiple="multiple">
      <div class="input-group-btn">
        <button class="btn btn-default" name="upload" type="submit"><i class="glyphicon glyphicon-paperclip"></i> Upload</button>
      </div>
    </div>
  </form>
</div>

<div class="container">
  <div class="row contentfile">
  <?php
function myuploads($fileinfo,$path,$maxsize = 2,$filetype = array('png','jpg','gif'),$iname = 'file_')
{
  //check thong tin trong fileinfo
  if($fileinfo){
    //ap dung duyet 1 trong 5 mang phan tu cua file
    if(is_array($fileinfo['name'])){
      //check tiep kcih thuoc file
      $msize = $maxsize * 1024*1024;
      $kq = '';
      foreach($fileinfo['name'] as $i=>$name){
        $type= $fileinfo['type'][$i];
        $tmp_name= $fileinfo['tmp_name'][$i];
        $size= $fileinfo['size'][$i];
        $error= $fileinfo['error'][$i];
        $onefile = array();
        //myupload($onefile,$path,$maxsize,$filetype,$name);
        //ok thi lam tiep
        if($size>0 && $size<= $msize)
        {
          //ok thi lam tiep
          //tim duoi
          $artmp = explode('.',$name);
          $n = count($artmp);
          $ext = $artmp && $n>0 ? $artmp[$n-1]:false;
          if($ext && in_array($ext,$filetype)){
            //check duôi file
            //tao name
            $newname = $iname.time().$i.'.'.$ext;
            $fullpath  = $path.'/'.$newname;
            move_uploaded_file($tmp_name,$fullpath)  ;
          }
        }
      }
      return $kq;
    }
      return false;
  }else
    return false;
}

if(isset($_POST['oldname'], $_POST['newname']))
{

}
if(isset($_POST['upload']))
{
  myuploads($_FILES['file'],'file/',2);
}
$fdpath =(isset($_GET['fd']) && $_GET['fd'])?$_GET['fd']: 'file';
if(!file_exists($fdpath))
  $fdpath = 'file';
@unlink($_GET['fd']);
$fdpath = 'file';
$fd = opendir($fdpath); // M? thu m?c hình ?nh
while($item  = readdir($fd)) // Li?t kê các file n?m trong thu m?c dó
{
  if($item != '.'  &&  $item != '..')
  {
    $fullpath = $fdpath.'/'.$item;
    $fullpath2 = $fullpath;
    if(is_file($fullpath))
    {

  ?>
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 mg-bot-20" >
      <img class="img-responsive" src="<?php echo $fullpath2 ?>"/>
        <div class="text-danger text-center"><?php echo $item ?></div>
        <ul class="filemenu">
       <?php echo "<li><a href='?fd=$fullpath' name='xoa' class='xoa'> Xóa</a></li>" ?>

       <?php echo "<li><a href='#' data-src='<?php ?>' class='doiten'>Đổi tên</a></li>" ?>
            <li><a href="#">Di chuyển</a></>
        </ul>
    </div>
    <?php } else
    { ?>
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 mg-bot-20" >
      <div class="text-danger text-center">
        <a href="<?php echo $fullpath;  ?>" name="fd"> <img class="img-responsive" src="images/pd.png"/></a><?php echo $item;?>
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
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
     Nh?p tên: <input class="form-control" name="newname" />
     <input id="oldname" type="hidden" name="oldname" value="" />
        </div>

        </div>
        <div class="modal-footer">
         <button type="submit" class="btn btn-default" >Luu</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Bỏ qua</button>
        </div>
        </form>
      </div>
    </div>
  </div>

<script>
  function CheckDel()
  {
    if(window.confirm("Bạn có muốn xoá không?"))
      return true;
    else
      return false;
  }
  $(document).ready(function()
  {
    $(".doiten").click(function()
    {
    $('#oldname').val($(this).data('src'));
        $("#myModal").modal();
    });

    $(".xoa").click(function()
    {
      CheckDel();
    });
});
</script>
</body>
</html>
