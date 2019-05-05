<?php
require_once '../libs/functions.php';
if(isset($_POST['ma']))
{							    
	$file = new FileManager($_FILES['avatar'],'file', 10);
	$_POST['avatar'] = $file->myUpLoads();
}
		     
if ( isset( $_POST[ 'ma' ] ) ) 
{
	$nguoidung = 'nguoidung';
	//luu ý: khi chuc nang chi doc du lieu  thi ca ban dung simple load xml
	//neu co tac dong toi du lieu xml  thi phải dung thằng này : DOMDocument
	$path = '../data/' . $nguoidung . '.xml';
	//tao moi 1 doi tuong quan ly xml
	if ( !empty( $_POST[ 'trangthai' ] ) && !empty( $_POST[ 'ma' ] ) && !empty( $_POST[ 'ten' ] ))
	{
		$pass =  md5($_POST['matkhau']);
		$id = $_POST['ma'] .rand(1,100).time().rand(1,1000);
			//luu ý: khi chuc nang chi doc du lieu  thi ca ban dung simple load xml
			//neu co tac dong toi du lieu xml  thi phải dung thằng này : DOMDocument
		$path = '../data/nguoidung.xml';
			//tao moi 1 doi tuong quan ly xml
		$doc = new DOMDocument();
			//tai noi dung xml vao doi tuong (khởi tạo)
		$doc->load($path);	
			//tim node root
		$root = $doc->documentElement;
			//varray($_POST);
			//tao node nguoi dung môi
		$nguoidung = $doc->createElement('nguoidung');

		$ma = $doc->createElement('ma', $id); //Khởi tạo một đối tượng mã có key là mã và value là id 
		$ten = $doc->createElement('ten',$_POST['ten']);
		$tendangnhap = $doc->createElement('tendangnhap',$_POST['tendangnhap']);
		$matkhau = $doc->createElement('matkhau',$pass);
		$ngaysinh = $doc->createElement('ngaysinh',$_POST['ngaysinh']);
		$gioitinh = $doc->createElement('gioitinh',$_POST['gioitinh']);
		$trangthai = $doc->createElement('trangthai',$_POST['trangthai']);
		$iplogin = $doc->createElement('iplogin',$_POST['iplogin']);
		$_POST['avatar'] = $doc->createElement('avatar',$_POST['avatar']);

			$nguoidung->appendChild($ma);//Thêm phần tử con vào trong root
			$nguoidung->appendChild($ten);
			$nguoidung->appendChild($tendangnhap);
			$nguoidung->appendChild($matkhau);
			$nguoidung->appendChild($ngaysinh);
			$nguoidung->appendChild($gioitinh);
			$nguoidung->appendChild($trangthai);
			$nguoidung->appendChild($iplogin);
			$nguoidung->appendChild($_POST['avatar']);
			//add vao root
			$root->appendChild($nguoidung);
			$doc->save($path);
		}
		else 
			echo '<div class="alert alert-warning center">Đăng kí thất bại, vui lòng kiểm tra lại thông tin</div>';
	}
	?>
	<div class="graphs">
		<div class="xs">
			<h3 style="text-align: center">Đăng ký người dùng</h3>
			<div class="tab-content">
				<div class="tab-pane active" id="focusedinput" >
					<form class="form-horizontal" method="post"  enctype="multipart/form-data">
						<div class="bs-example" data-example-id="form-validation-states-with-icons">
							<div class="panel-footer">
								<div class="form-group">
									<label for="exampleInputFile" style="">Chọn ảnh đại diện</label>
									<input type="file" name="avatar[]" class="form-control1" >
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Mã người dùng</label>
							<div class="col-sm-8">
								<input type="number" min="0" max="100" name="ma" class="form-control1" id="focusedinput" placeholder="Nhập số">
							</div>
							<div class="col-sm-2">
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Tên người dùng</label>
							<div class="col-sm-8">
								<input type="text" maxlength="30" name="ten" class="form-control1" id="focusedinput" placeholder="Tên người dùng có tối đa 30 kí tự">
							</div>
							<div class="col-sm-2">
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Tên đăng nhập</label>
							<div class="col-sm-8">
								<input type="text" maxlength="15"  name="tendangnhap" class="form-control1" id="focusedinput" placeholder="Tên đăng nhập tối đa 15 kí tự">
							</div>
							<!-- autocomplete: Gợi ý thông tin - tự động điền -->
							<div class="col-sm-2">
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">Ngày sinh</label>
							<div class="col-sm-8">
								<input type="date" name="ngaysinh" min="1970-01-01" max="2018-01-01" class="form-control1" id="focusedinput">
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
							<label for="radio" class="col-sm-2 control-label">Giới tính</label>

							<div class="col-sm-8">
								<div class="radio-inline">
									<label><input checked="checked" value="Nam" name="gioitinh" type="radio">Nam</label>
								</div>

								<div class="radio-inline">
									<label><input value="Nữ" name="gioitinh" type="radio" > Nữ</label>							
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword" class="col-sm-2 control-label">IP Login</label>
							<div class="col-sm-8">
								<input type="text" name="iplogin" class="form-control1" id="focusedinput" placeholder="IP Login" value="<?php echo getClientIP(); ?>" readonly>
							</div>
						</div>
						<div class="form-group">
							<label for="checkbox" class="col-sm-2 control-label">Trạng thái</label>
							<div class="col-sm-8">
								<div class="checkbox-inline1">
									<label>
										<input type="checkbox" name="trangthai" value="1" checked="checked">
										Kích hoạt
									</label>
								</div>
							</div>
						</div>
						<div class="bs-example" data-example-id="form-validation-states-with-icons">
							<div class="text-center">							
								<button type="submit" class="btn btn-success warning_2 hvr-reveal">Hoàn tất</button>
								<a href="?p=listuser" class="btn btn-default hvr-reveal" onclick="return confirm('Bạn có muốn huỷ không?')">Huỷ</a>
								<button type="reset" onclick="return confirm('Bạn có muốn làm lại không?')" class="btn btn-primary hvr-reveal">Làm lại</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
