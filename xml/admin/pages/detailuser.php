<?php
if ( !isset( $_GET[ 'ma' ] ) || !$_GET[ 'ma' ] )
	chuyentrang( '?p=listuser' );
//doc thong tin nguoi muon sua truoc
$ma = $_GET[ 'ma' ];
$path = '../data/nguoidung.xml';
//tao moi 1 doi tuong quan ly xml
$doc = new DOMDocument();
$nodecantim = edit_xml( $path, $ma, $doc );
?>
<div class="graphs">
	<div class="xs">
		<h3 style="text-align: center">Chi tiết người dùng</h3>
		<div class="tab-content">
			<div class="tab-pane active" id="horizontal-form">
				<form class="form-horizontal" action="" method="post">

					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Mã người dùng</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" id="focusedinput" name="ma" value="<?php echo $nodecantim->getElementsByTagName('ma')->item(0)->nodeValue; ?>" readonly>
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Tên người dùng</label>
						<div class="col-sm-8">
							<input type="text" value="<?php echo $nodecantim->getElementsByTagName('ten')->item(0)->nodeValue; ?>" class="form-control1" id="focusedinput" name="ten"  readonly>
						</div>
					</div>

					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Tên đăng nhập</label>
						<div class="col-sm-8">
							<input type="text" value="<?php echo $nodecantim->getElementsByTagName('tendangnhap')->item(0)->nodeValue; ?>" class="form-control1" id="focusedinput" name="tendangnhap" readonly> 
						</div>
					</div>

					<div class="form-group">
						<label for="inputPassword" class="col-sm-2 control-label">Mật khẩu</label>
						<div class="col-sm-8">
							<input type="password" class="form-control1" id="inputPassword" name="matkhau" placeholder="Không thể hiển thị" readonly>
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">IP login</label>
						<div class="col-sm-8">
							<input type="text" value="<?php echo $nodecantim->getElementsByTagName('iplogin')->item(0)->nodeValue; ?>" class="form-control1" id="focusedinput" name="iplogin" readonly>
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Ngày sinh</label>
						<div class="col-sm-8">
							<input type="text" value="<?php echo $nodecantim->getElementsByTagName('ngaysinh')->item(0)->nodeValue; ?>" class="form-control1" id="focusedinput" name="ngaysinh" readonly>
						</div>
					</div>

					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Giới tính</label>
						<div class="col-sm-8">
							<input type="text" value="<?php echo $nodecantim->getElementsByTagName('gioitinh')->item(0)->nodeValue; ?>" class="form-control1" id="focusedinput" name="gioitinh" readonly>
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Trạng thái</label>
						<div class="col-sm-8">
							<input type="text" value="<?php echo $a =  ($nodecantim->getElementsByTagName('trangthai')->item(0)->nodeValue == '1') ? 'Đang kích hoạt' : 'Đang bị chặn'; ?>" class="form-control1" id="focusedinput" name="trangthai" readonly>
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Ảnh đại diện</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" id="focusedinput" name="avatar" value="<?php echo $nodecantim->getElementsByTagName('avatar')->item(0)->nodeValue; ?>" readonly>
						</div>
					</div>					
					<div class="text-center">
						<a href="?p=listuser" class="btn btn-default hvr-reveal">Quay lại</a>						
					</div>
				</form>
			</div>
		</div>
	</div>
</div>