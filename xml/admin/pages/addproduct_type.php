<?php
if ( isset( $_POST[ 'ma' ] ) ) {
	$loaisanpham = 'loaisanpham';
	$path = '../data/' . $loaisanpham . '.xml';
	if ( !empty( $_POST[ 'trangthai' ] )&& !empty($_POST['ma']) && !empty( $_POST[ 'ten' ] ) )
		add_xml( $path, $loaisanpham, $_POST );
	else 
		echo '<div class="alert alert-warning center">Đăng kí thất bại, vui lòng kiểm tra lại thông tin</div>';	
}
?>
<div class="graphs">
	<div class="xs">
		<h3 style="text-align: center">Đăng kí loại sản phẩm</h3>
		<div class="tab-content">
			<div class="tab-pane active" id="horizontal-form">
				<form class="form-horizontal" method="post">
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Mã</label>
						<div class="col-sm-8">
							<input type="text" maxlength="5" name="ma" class="form-control1" id="focusedinput" placeholder="Mã sản phẩm tối đa 5 kí tự">
						</div>
						<div class="col-sm-2">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Tên</label>
						<div class="col-sm-8">
							<input type="text" maxlength="30" name="ten" class="form-control1" id="focusedinput" placeholder="Tên sản phẩm tối đa 30 kí tự">
						</div>
						<div class="col-sm-2">
						</div>
					</div>
					<div class="form-group">
						<label for="radio" class="col-sm-2 control-label">Trạng thái</label>
						<div class="col-sm-8">
							<div class="radio-inline"><label><input value="Còn hàng" type="checkbox" name="trangthai" checked="checked"> Còn hàng</label>
							</div>
						</div>
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-success warning_2 hvr-reveal">Hoàn tất</button>
						<a href="?p=listproduct_type" class="btn btn-default hvr-reveal">Huỷ</a>
						<button type="reset" onclick="return confirm('Bạn có muốn làm lại không?')" value="reset" class="btn btn-primary hvr-reveal">Làm lại</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>