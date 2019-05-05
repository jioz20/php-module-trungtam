<?php
require_once '../libs/functions.php';
if ( !isset( $_GET[ 'ma' ] ) || !$_GET[ 'ma' ] )
	chuyentrang( '?p=listuser' );
//doc thong tin nguoi muon sua truoc
$ma = $_GET[ 'ma' ];
$path = '../data/nguoidung.xml';
//tao moi 1 doi tuong quan ly xml
$doc = new DOMDocument();
$nodecantim = edit_xml( $path, $ma, $doc );
if ( isset( $_POST[ 'ma' ] ) && $nodecantim ) 
{
	if ( !isset( $_POST[ 'trangthai' ] ) )
	$_POST[ 'trangthai' ] = 0;
	if ( !empty( $_POST[ 'trangthai' ] ) && !empty( $_POST[ 'ten' ] ))
	{
		if(is_numeric($_POST['ma']) && $_POST['ngaysinh'] >= '1970-01-01' && $_POST['ngaysinh'] <= '2018-01-01')
		{
			if($_POST['matkhau'])
				$_POST['matkhau'] = md5($_POST['matkhau']);
			else
				unset($_POST['matkhau']);
		}
	}


	if (!empty( $_POST[ 'ma' ] ) && !empty( $_POST[ 'ten' ] ))
	{

		foreach ( $_POST as $k => $v )
			$nodecantim->getElementsByTagName( $k )->item( 0 )->nodeValue = $v;

		$file = new FileManager($_FILES['avatar'],'file', 10);
		$nodecantim->getElementsByTagName('avatar')->item( 0 )->nodeValue = $file->myUpLoads();
		$doc->save( $path );
	}

}
?>
<div class="graphs">
	<div class="xs">
		<h3 style="text-align: center">Quản lý người dùng</h3>
		<div class="tab-content">
			<div class="tab-pane active" id="horizontal-form">
				<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
					<div class="bs-example" data-example-id="form-validation-states-with-icons">
						<div class="panel-footer">
							<div class="form-group">
								<label for="exampleInputFile">Chọn ảnh đại diện</label>
								<input type="file" name="avatar[]" class="form-control1" >
							</div>
						</div>
					</div>					
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Ảnh đại diện</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" id="focusedinput" name="avatar" value="<?php echo $nodecantim->getElementsByTagName('avatar')->item(0)->nodeValue; ?>" readonly>
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Mã người dùng</label>
						<div class="col-sm-8">
							<input type="number" min="1" max="10000" class="form-control1" placeholder="Mã người dùng tối đa là 10000" id="focusedinput" name="ma" value="<?php echo $nodecantim->getElementsByTagName('ma')->item(0)->nodeValue; ?>" readonly>
						</div>
					</div>

					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Tên người dùng</label>
						<div class="col-sm-8">
							<input type="text" placeholder="Tên người dùng tối đa 30 kí tự" maxlength="30" value="<?php echo $nodecantim->getElementsByTagName('ten')->item(0)->nodeValue; ?>" class="form-control1" id="focusedinput" name="ten" />
						</div>
					</div>

					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Tên đăng nhập</label>
						<div class="col-sm-8">
							<input type="text" placeholder="Tên đăng nhập tối đa 15 kí tự" maxlength="15" value="<?php echo $nodecantim->getElementsByTagName('tendangnhap')->item(0)->nodeValue; ?>" class="form-control1" id="focusedinput" name="tendangnhap" />
						</div>
					</div>

					<div class="form-group">
						<label for="inputPassword" class="col-sm-2 control-label">Mật khẩu</label>
						<div class="col-sm-8">
							<input type="password" placeholder="Mật khẩu tối đa 20 kí tự" maxlength="20" class="form-control1" id="inputPassword" name="matkhau" />
						</div>
					</div>

					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Ngày sinh</label>
						<div class="col-sm-8">
							<input type="date" min="1970-01-01" max="2018-01-01" value="<?php echo $nodecantim->getElementsByTagName('ngaysinh')->item(0)->nodeValue; ?>" class="form-control1" id="focusedinput" name="ngaysinh" >
						</div>
					</div>

					<div class="form-group">
						<label for="radio" class="col-sm-2 control-label">Giới tính</label>
						<div class="col-sm-8">
							<div class="radio-inline">
								<label>
		                  <input checked="checked" <?php  echo $nodecantim->getElementsByTagName('gioitinh')->item(0)->nodeValue=='Nam'?'checked':''; ?> value="Nam" name="gioitinh" type="radio">
		                  Nam</label>
							
							</div>
							<div class="radio-inline">
								<label>
		                  <input value="Nữ" <?php  echo $nodecantim->getElementsByTagName('gioitinh')->item(0)->nodeValue=='Nữ'?'checked':''; ?>  name="gioitinh"  type="radio" >
		                  Nữ</label>
							
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="checkbox" class="col-sm-2 control-label">Trạng thái</label>
						<div class="col-sm-8">
							<div class="checkbox-inline1">
								<label>
		                  <input  type="checkbox" name="trangthai" value="1" <?php  echo $nodecantim->getElementsByTagName('trangthai')->item(0)->nodeValue=='1'?'checked':''; ?>>
		                  Kích hoạt</label>						
							</div>
						</div>
					</div>
					<div class="text-center">
						<button type="submit" onclick="return confirm('Bạn có muốn thay đổi không?');" 
						class="btn btn-success warning_2 hvr-reveal">Cập nhật</button>
						<a href="?p=listuser" class="btn btn-default hvr-reveal">Trở lại</a>						
					</div>
				</form>
			</div>
		</div>
	</div>
</div>