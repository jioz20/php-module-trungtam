<?php
if ( !isset( $_GET[ 'ma' ] ) || !$_GET[ 'ma' ] )
	chuyentrang( '?p=listmember' );
//doc thong tin nguoi muon sua truoc
$ma = $_GET[ 'ma' ];
$path = '../data/thanhvien.xml';
//tao moi 1 doi tuong quan ly xml
$doc = new DOMDocument();
$nodecantim = edit_xml( $path, $ma, $doc );
?>
<div class="graphs">
	<div class="xs">
		<h3 style="text-align: center">Chi tiết thành viên</h3>
		<div class="tab-content">
			<div class="tab-pane active" id="horizontal-form">
				<form class="form-horizontal" method="post">
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Mã</label>
						<div class="col-sm-8">
							<input type="text" name="ma" class="form-control1" value="<?php echo $nodecantim->getElementsByTagName('ma')->item(0)->nodeValue; ?>" id="focusedinput" readonly>
						</div>
						<div class="col-sm-2">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Tên</label>
						<div class="col-sm-8">
							<input type="text" value="<?php echo $nodecantim->getElementsByTagName('ten')->item(0)->nodeValue; ?>" name="ten" class="form-control1" id="focusedinput" readonly>
						</div>
						<div class="col-sm-2">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Tên đăng nhập</label>
						<div class="col-sm-8">
							<input type="text" value="<?php echo $nodecantim->getElementsByTagName('tendangnhap')->item(0)->nodeValue; ?>" name="tendangnhap" class="form-control1" id="focusedinput" readonly>
						</div>
						<div class="col-sm-2">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-8">
							<input type="text" name="email" class="form-control1" id="focusedinput" value="<?php echo $nodecantim->getElementsByTagName('email')->item(0)->nodeValue; ?>" readonly>
						</div>
						<div class="col-sm-2">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword" class="col-sm-2 control-label">Mật khẩu</label>
						<div class="col-sm-8">
							<input type="password" placeholder="Không thể hiển thị" name="matkhau" class="form-control1" id="inputPassword" readonly>
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Trạng thái</label>
						<div class="col-sm-8">
							<input type="text" value="<?php echo $a =  ($nodecantim->getElementsByTagName('trangthai')->item(0)->nodeValue == '1') ? 'Đang kích hoạt' : 'Đang bị chặn'; ?>" class="form-control1" id="focusedinput" name="trangthai" readonly>
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Số điện thoại</label>
						<div class="col-sm-8">
							<input type="text" name="sodienthoai" class="form-control1" id="focusedinput" value="<?php echo $nodecantim->getElementsByTagName('sodienthoai')->item(0)->nodeValue; ?>" readonly>
						</div>
						<div class="col-sm-2">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Ảnh đại diện</label>
						<div class="col-sm-8">
							<input type="text" class="form-control1" id="focusedinput" name="avatar" value="<?php echo $nodecantim->getElementsByTagName('avatar')->item(0)->nodeValue; ?>" readonly>
						</div>
					</div>					
					<div class="text-center">
						<a href="?p=listmember" class="btn btn-default hvr-reveal">Quay lại</a>						
					</div>
				</form>
			</div>
		</div>
	</div>
</div>