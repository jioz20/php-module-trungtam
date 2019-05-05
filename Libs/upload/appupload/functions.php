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
						//check đuôi file
						//tao name 
						$newname = $iname.time().$i.'.'.$ext;
						$fullpath  = $path.'/'.$newname;
						if(move_uploaded_file($tmp_name,$fullpath))
							$kq .= 'File: "'.$name.'" upload thành công ('. $fullpath.')<br>';			
						else
							$kq .= 'File: "'.$name.'" upload thất bại<br>';						
					}else 
						$kq .= 'File: "'.$name.'" đuôi file không hợp lệ<br>';	
				}else
					$kq .= 'File: "'.$name.'" dung lượng file không hợp lệ<br>';
				//kich thuoc loi tra ve loi gi do			
			}
			return $kq;
		}
			return false;
	}else
		return false;
}
?>