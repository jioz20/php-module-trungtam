<?php
if ( isset( $_POST[ 'ma' ] ) ) {
	$hoadon = 'hoadon';
	$path = '../data/' . $hoadon . '.xml';
	if ( !empty( $_POST[ 'mathanhvien' ] ) && !empty( $_POST[ 'ma' ] ) && !empty($_POST[ 'sohoadon' ]))
		if(is_numeric($_POST[ 'sohoadon' ]))
			add_xml( $path, $hoadon, $_POST );
	else
		echo '<div class="alert alert-warning center">Đăng kí thất bại, vui lòng kiểm tra lại thông tin</div>';	
}
?>
<div class="graphs">
	<div class="xs">
		<h3 style="text-align: center">Đăng kí hoá đơn</h3>
		<div class="tab-content">
			<div class="tab-pane active" id="horizontal-form">
				<form class="form-horizontal" method="post">
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Mã</label>
						<div class="col-sm-8">
							<input type="text" maxlength="10" name="ma" class="form-control1" id="focusedinput" placeholder="Mã hoá đơn tối đa 10 kí tự">
						</div>
						<div class="col-sm-2">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Số hoá đơn</label>
						<div class="col-sm-8">
							<input type="text" maxlength="10" name="sohoadon" class="form-control1" id="focusedinput" placeholder="Số hoá đơn tối đa 10 kí tự">
						</div>
						<div class="col-sm-2">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Ngày lập</label>
						<div class="col-sm-8">
							<input type="date" min="2000-1-1" max="2018-12-31" name="ngaylap" class="form-control1" id="focusedinput">
						</div>
						<div class="col-sm-2">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Mã thành viên</label>
						<div class="col-sm-8">
							<input type="text" maxlength="10" name="mathanhvien" class="form-control1" id="focusedinput" placeholder="Mã thành viên tối đa 10 kí tự">
						</div>
						<div class="col-sm-2">
						</div>
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-success warning_2 hvr-reveal">Hoàn tất</button>
						<a href="?p=listinvoice" class="btn btn-default hvr-reveal">Huỷ</a>
						<button type="reset" class="btn btn-primary hvr-reveal" onclick="return confirm('Bạn có muốn làm lại không?')">Làm lại</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>