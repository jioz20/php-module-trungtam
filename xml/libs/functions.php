<?php 
	function viewar($l)
	{
		echo '<pre>';
		print_r($l);
		echo '</pre>';
	}
	function get_id($link_xml, $obj_key)
	{

	$path_listuser = $link_xml;
	// tạo đối tượng DOMDocument
	$doc = new DOMDocument();
	//tải toàn bộ nội dung XML vào đối tượng $doc
	$doc->load( $path_listuser );
	// tìm root trong đối tượng $doc
	$root = $doc->documentElement;
	// lấy danh sách root ra 
	$lg=0;
	$listnodenguoidung = $root->childNodes;
	foreach ( $listnodenguoidung as $node ) {
		if ( $node->nodeType == XML_ELEMENT_NODE ) {
			$nodethuoctinhs = $node->childNodes;
			foreach ( $nodethuoctinhs as $nodethuoctinh ) {
				if ( $nodethuoctinh->nodeType == XML_ELEMENT_NODE )
				 {
				 	if ( $nodethuoctinh->nodeName == 'id_nguoidung')
				 	{
				 		$lg+=1;
				 	}
				 }
			}
		}
	}
	return 'ND'.time().'_'.$lg;
	

}
	function chuyentrang($link = 'index.php')
	{
		header('location: '. $link);
	}
	
	function islogin()
	{
		if(isset($_SESSION['login'])&& $_SESSION['login'])
			return true;
		else 
			return false;
	}
	function getClientIP() 
	{
    	return $_SERVER['REMOTE_ADDR'];	
	}
	function add_xml($path, $Object, $post)
    {
	    $doc = new DOMDocument();
		//tai noi dung xml vao doi tuong (khởi tạo)
		$doc->load($path);
		//tim node root
		$root = $doc->documentElement;
		//varray($_POST);
		//tao node nguoi dung môi
		$Object = $doc->createElement($Object); 
	 	foreach($post as $k => $v)
	 	{
		  	$k = $doc->createElement($k, $v);
		  	$Object->appendChild($k);
	  	}	
		  	$root->appendChild($Object);
		  	$doc->save($path);    	
    }

	function del_xml($path, $ma)
	{
		$doc = new DOMDocument();
		//tai noi dung xml vao doi tuong (khởi tạo)
		$doc->load($path);
		//tim node root
		$root = $doc->documentElement;
		//lay danh sach node con
		$listnodeObject = $root->childNodes;
		foreach($listnodeObject as $nodeObject)
		{
			if($nodeObject->nodeType ==XML_ELEMENT_NODE)
			{
				$nodethuoctinhs = $nodeObject->childNodes;
				foreach($nodethuoctinhs as $nodethuoctinh)
				{
					if($nodethuoctinh->nodeType ==XML_ELEMENT_NODE)
					{
						if($nodethuoctinh->nodeName  == 'ma' && $nodethuoctinh->nodeValue==$ma)
						{
							$root->removeChild($nodeObject);
							break;
						}
					}
				}
			}
		}
		$doc->save($path);
	}

	function edit_xml($path, $ma, $doc)
	{
		$doc->load($path);
		$root = $doc->documentElement;
		$listnodeObject = $root->childNodes;
		foreach($listnodeObject as $nodeObject)
		{
			if($nodeObject->nodeType ==XML_ELEMENT_NODE)
			{
				$nodethuoctinhs = $nodeObject->childNodes;
				foreach($nodethuoctinhs as $nodethuoctinh)
				{
					if($nodethuoctinh->nodeType ==XML_ELEMENT_NODE)
					{
						if($nodethuoctinh->nodeName  == 'ma' && $nodethuoctinh->nodeValue==$ma)
						{
							return $nodeObject;
						}
					}
				}
			}
		}
	}

//Ứng dụng UploadFile
class FileManager
{
    private $filename;
    private $path;
    private $filetype = array('png','jpg','gif');
    private $name='file_';
    private $maxsize;
    function __construct($fileinfo, $dd, $msize) {
        $this->filename = $fileinfo;
        $this->maxsize =$msize;
        $this->path = $dd;
        
    }
    function myUpLoads()
    {
        if($this->filename)
        {
            if(is_array($this->filename['name']))
            {
                $maxs = $this->maxsize *1024 *1024;
                $kq ='';
                foreach($this->filename['name'] as $i=>$name)
                {
                    $type = $this->filename['type'][$i];
                    $size = $this->filename['size'][$i];
                    $tmp_name = $this->filename['tmp_name'][$i];
                    $error = $this->filename['error'][$i];
                    if($size > 0 && $size <=$maxs)
                    {
                        $tachduoi = explode('.', $name);
                        $duoi = end($tachduoi);
                        $duoi = strtolower($duoi);
                        //echo $duoi;
                        if(in_array($duoi, $this->filetype))
                        {
                            $newname = $this->name.time().$i.'.'.$duoi;
                            echo $fullpath  = $_SERVER['DOCUMENT_ROOT'].'/module/xml/admin/'.$this->path.'/'.$newname;
                            //echo $fullpath;
                            move_uploaded_file($tmp_name,$fullpath);
                            echo $newname;                  
                        }	
                    }
                }
                
            }
		}
	}
}

?>