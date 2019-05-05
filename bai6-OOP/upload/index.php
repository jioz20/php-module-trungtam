<?php 
  abstract class file_manager
  {
    var $fileinfo,$path, $fdpath;
    private $maxsize = 2,$filetype = array('png','jpg','gif', 'doc', 'docx'), $iname = 'file_';

    function __constract ($fileinfo, $path, $fdpath)
    {
      $this->fileinfo = $fileinfo;
      $this->path = $path;
      $this->fdpath = $fdpath;
    }
    function __destruct(){}

    abstract function phuongthuc();
  }

  class xoa extends file_manager
  {
    function phuongthuc()
    {
      if(!file_exists($fdpath)) 
        $fdpath = 'file';
      unlink($_GET['fd']);
    }
  }

  class doiten extends file_manager
  {
    function phuongthuc()
    {
      if(isset($_POST['oldname'], $_POST['newname']))
        {
          $tachmangxt = explode('/', $_POST['oldname']); //Tách chuỗi thành mảng theo dấu '/'
          $tachmangcm = explode('.', $tachmangxt[count($tachmangxt) - 1]); // Tách chuỗi thành mảng theo dấu '.'
          $tachmangcm[0] = $_POST['newname']; // Thay thế tên
          $ghepcm = implode('.', $tachmangcm); //Ghép đuôi và tên mới;
          $tachmangxt[count($tachmangxth) - 1] = $ghepcm;
          $fd = implode('/', $tachmangxt);
        }
    }
  }
?>