<?php
if ( !isset( $_GET[ 'ma' ] ) || !$_GET[ 'ma' ] )
	chuyentrang( '?p=listmember' );
//doc thong tin nguoi muon sua truoc
$ma = $_GET[ 'ma' ];
$path = '../data/thanhvien.xml';
//tao moi 1 doi tuong quan ly xml


	$doc = new DOMDocument();
	$nodecantim = edit_xml( $path, $ma, $doc );
	if ( isset( $_POST[ 'ma' ] ) && $nodecantim ) 
	{
		if ( !isset( $_POST[ 'trangthai' ] ) )
		$_POST[ 'trangthai' ] = 0;
		if ( !empty( $_POST[ 'trangthai' ] ) && !empty( $_POST[ 'ten' ] ))
		{
			if(is_numeric($_POST['ma']))
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
		<h3 style="text-align: center">Quản lý thành viên</h3>
		<div class="tab-content">
			<div class="tab-pane active" id="horizontal-form">
				<form class="form-horizontal" method="post" enctype="multipart/form-data">
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
						<label for="focusedinput" class="col-sm-2 control-label">Mã</label>
						<div class="col-sm-8">
							<input type="text" maxlength="10" placeholder="Mã thành viên tối đa 10 kí tự" name="ma" class="form-control1" value="<?php echo $nodecantim->getElementsByTagName('ma')->item(0)->nodeValue; ?>" id="focusedinput" readonly>
						</div>
						<div class="col-sm-2">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Tên</label>
						<div class="col-sm-8">
							<input type="text" maxlength="30" placeholder="Tên thành viên tối đa 30 kí tự" value="<?php echo $nodecantim->getElementsByTagName('ten')->item(0)->nodeValue; ?>" name="ten" class="form-control1" id="focusedinput">
						</div>
						<div class="col-sm-2">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Tên đăng nhập</label>
						<div class="col-sm-8">
							<input type="text" maxlength="30" placeholder="Tên đăng nhập tối đa 30 kí tự" value="<?php echo $nodecantim->getElementsByTagName('tendangnhap')->item(0)->nodeValue; ?>" name="tendangnhap" class="form-control1" id="focusedinput">
						</div>
						<div class="col-sm-2">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-8">
							<input type="text" maxlength="35" placeholder="Email tối đa 35 kí tự" name="email" class="form-control1" id="focusedinput" value="<?php echo $nodecantim->getElementsByTagName('email')->item(0)->nodeValue; ?>" >
						</div>
						<div class="col-sm-2">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword" class="col-sm-2 control-label">Mật khẩu</label>
						<div class="col-sm-8">
							<input type="password" maxlenght="20" value="" placeholder="Mật khẩu tối đa là 20 kí tự" name="matkhau" class="form-control1" id="inputPassword" >
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
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Số điện thoại</label>
						<div class="col-sm-8">
							<input type="text" minlength="10" maxlength="11" name="sodienthoai" class="form-control1" id="focusedinput" value="<?php echo $nodecantim->getElementsByTagName('sodienthoai')->item(0)->nodeValue; ?>" >
						</div>
						<div class="col-sm-2">
						</div>
					</div>
					<div class="text-center">
						<button type="submit" onclick="return confirm('Bạn có muốn thay đổi không?')" class="btn btn-success warning_2">Cập nhật</button>
						<a href="?p=listmember" class="btn btn-default">Trở lại</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>