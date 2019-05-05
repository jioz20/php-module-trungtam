<?php
require_once '../libs/functions.php';
if(isset($_POST['ma']))
{							    
	$file = new FileManager($_FILES['avatar'],'file', 10);
	$_POST['avatar'] = $file->myUpLoads();
}		
if ( isset( $_POST[ 'ma' ] ) ) {
	//luu ý: khi chuc nang chi doc du lieu  thi ca ban dung simple load xml
	//neu co tac dong toi du lieu xml  thi phải dung thằng này : DOMDocument
	$thanhvien = 'thanhvien';
	$path = '../data/' . $thanhvien . '.xml';
	if ( !empty( $_POST[ 'trangthai' ] ) && !empty( $_POST[ 'ma' ] ) && !empty( $_POST[ 'ten' ] ) )
		{
			if(is_numeric($_POST['sodienthoai']))
			{
				$pass =  md5($_POST['matkhau']);
				$id = $_POST['ma'] .rand(1,100).time().rand(1,1000);
				//luu ý: khi chuc nang chi doc du lieu  thi ca ban dung simple load xml
				//neu co tac dong toi du lieu xml  thi phải dung thằng này : DOMDocument
				$path = '../data/thanhvien.xml';
				//tao moi 1 doi tuong quan ly xml
				$doc = new DOMDocument();
				//tai noi dung xml vao doi tuong (khởi tạo)
				$doc->load($path);
				//tim node root
				$root = $doc->documentElement;
				//varray($_POST);
				//tao node nguoi dung môi
				$thanhvien = $doc->createElement('thanhvien');

				$ma = $doc->createElement('ma',$id);
				$ten = $doc->createElement('ten',$_POST['ten']);
				$tendangnhap = $doc->createElement('tendangnhap',$_POST['tendangnhap']);
				$matkhau = $doc->createElement('matkhau',$pass);
				$email = $doc->createElement('email',$_POST['email']);
				$sodienthoai = $doc->createElement('sodienthoai',$_POST['sodienthoai']);
				$trangthai = $doc->createElement('trangthai',$_POST['trangthai']);
				$_POST['avatar'] = $doc->createElement('avatar',$_POST['avatar']);
				
				$thanhvien->appendChild($ma);
				$thanhvien->appendChild($ten);
				$thanhvien->appendChild($tendangnhap);
				$thanhvien->appendChild($matkhau);
				$thanhvien->appendChild($email);
				$thanhvien->appendChild($trangthai);
				$thanhvien->appendChild($_POST['avatar']);
				$thanhvien->appendChild($sodienthoai);
				$root->appendChild($thanhvien);
				$doc->save($path);
			}			
		}
	else
		echo '<div class="alert alert-warning center">Đăng kí thất bại, vui lòng kiểm tra lại thông tin</div>';	
}
?>
<div class="graphs">
	<div class="xs">
		<h3 style="text-align: center">Đăng ký thành viên</h3>
		<div class="tab-content">
			<div class="tab-pane active" id="horizontal-form">
				<form class="form-horizontal" method="post" enctype="multipart/form-data">
					<div class="panel-footer">
						<div class="form-group">
							<label for="exampleInputFile">Chọn ảnh đại diện</label>
							<input type="file" name="avatar[]" id="exampleInputFile">
						</div>
					</div>					
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Mã</label>
						<div class="col-sm-8">
							<input type="number" min="0" max="100" name="ma" class="form-control1" id="focusedinput" placeholder="Mã người dùng là số">
						</div>
						<div class="col-sm-2">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Tên</label>
						<div class="col-sm-8">
							<input type="text" maxlength="30" name="ten" class="form-control1" id="focusedinput" placeholder="Tên người dùng tối đa 30 kí tự">
						</div>
						<div class="col-sm-2">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Tên đăng nhập</label>
						<div class="col-sm-8">
							<input type="text" maxlength="30" name="tendangnhap" class="form-control1" placeholder="Tên đăng nhập tối đa 30 kí tự" id="focusedinput">
						</div>
						<div class="col-sm-2">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-8">
							<input type="email" maxlength="35" name="email" class="form-control1" placeholder="Email tối đa 35 kí tự" id="focusedinput">
						</div>
						<div class="col-sm-2">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword" class="col-sm-2 control-label">Mật khẩu</label>
						<div class="col-sm-8">
							<input type="password" maxlength="20" name="matkhau" class="form-control1" id="inputPassword" placeholder="Mật khẩu tối đa 20 kí tự">
						</div>
					</div>
					<div class="form-group">
						<label for="checkbox" class="col-sm-2 control-label">Trạng thái</label>
						<div class="col-sm-8">
							<div class="checkbox-inline1">
								<label>
					                  <input type="checkbox" name="trangthai" value="1" checked="checked">
					                  Kích hoạt</label>
							
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Số điện thoại</label>
						<div class="col-sm-8">
							<input type="text" minlength="10" maxlength="11" name="sodienthoai" class="form-control1" id="focusedinput" placeholder="Số điện thoại">
						</div>
						<div class="col-sm-2">
						</div>
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-success warning_2 hvr-reveal">Hoàn tất</button>
						<a href="?p=listmember" class="btn btn-default hvr-reveal">Huỷ</a>
						<button type="reset" onclick="return confirm('Bạn có muốn làm lại không?')" class="btn btn-primary hvr-reveal">Làm lại</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>