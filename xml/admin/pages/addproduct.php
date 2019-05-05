<?php
if ( isset( $_POST[ 'ma' ] ) ) {
	$sanpham = 'sanpham';
	$path = '../data/' . $sanpham . '.xml';
	if ( !empty( $_POST[ 'trangthai' ] ) && !empty( $_POST[ 'ma' ] ) && !empty( $_POST[ 'ten' ] ) )
	{
		add_xml( $path, $sanpham, $_POST );
		echo '<div class="alert alert-success text-center">Đăng ký thành công</div>';	
	}
	else
		echo '<div class="alert alert-warning text-center">Đăng kí thất bại, vui lòng kiểm tra lại thông tin</div>';	
}
?>
<div class="graphs">
	<div class="xs">
		<h3 style="text-align: center">Đăng kí sản phẩm</h3>
		<div class="tab-content">
			<div class="tab-pane active" id="horizontal-form">
				<form class="form-horizontal" method="post">
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Mã</label>
						<div class="col-sm-8">
							<input type="text" maxlength="5" name="ma" class="form-control1" id="focusedinput" placeholder="Mã sản phẩm tối đa 5 kí tự">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Tên</label>
						<div class="col-sm-8">
							<input type="text" maxlength="50" name="ten" class="form-control1" id="focusedinput" placeholder="Tên sản phẩm tối đa 50 kí tự">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Loại sản phẩm</label>
						<div class="col-sm-8">
							<input type="text" min="1" max="10" name="loaisanpham" class="form-control1" id="focusedinput" placeholder="Nhập số tối đa là 10">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Giá</label>
						<div class="col-sm-8">
							<input type="number" min="1000" max="100000000000" name="gia" class="form-control1" id="focusedinput" placeholder="Nhập số tối đa là 100 tỷ">
						</div>
					</div>
					<div class="form-group">
						<label for="radio" class="col-sm-2 control-label">Trạng thái</label>
						<div class="col-sm-8">
							<div class="radio-inline"><label><input type="checkbox" value="Còn hàng" name="trangthai" checked="checked" > Còn hàng</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Số lượng</label>
						<div class="col-sm-8">
							<input type="number" min="0" max="9999" name="soluong" class="form-control1" id="focusedinput" placeholder="Nhập số">
						</div>
					</div>
					<div class="panel-footer">
						<div class="form-group">
							<label for="exampleInputFile">Chọn ảnh sản phẩm</label>
							<input type="file" id="exampleInputFile" name="avatar">
						</div>
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-success warning_2 hvr-reveal">Hoàn tất</button>
						<a href="?p=listproduct" class="btn btn-default hvr-reveal">Huỷ</a>
						<button type="reset" onclick="return confirm('Bạn có muốn làm lại không?')" class="btn btn-primary hvr-reveal">Làm lại</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>