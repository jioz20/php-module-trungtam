<?php
if ( !isset( $_GET[ 'ma' ] ) || !$_GET[ 'ma' ] )
	chuyentrang( '?p=listproduct' );
$ma = $_GET[ 'ma' ];
$path = '../data/sanpham.xml';
$doc = new DOMDocument();
$nodecantim = edit_xml( $path, $ma, $doc );
if ( isset( $_POST[ 'ma' ] ) && $nodecantim ) {
	if ( !isset( $_POST[ 'trangthai' ] ) )
		$_POST[ 'trangthai' ] = '0';
	foreach ( $_POST as $k => $v )
		$nodecantim->getElementsByTagName( $k )->item( 0 )->nodeValue = $v;
	$doc->save( $path );
}
?>
<div class="graphs">
	<div class="xs">
		<h3 style="text-align: center">Quản lý sản phẩm</h3>
		<div class="tab-content">
			<div class="tab-pane active" id="horizontal-form">
				<form class="form-horizontal" method="post">
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Mã</label>
						<div class="col-sm-8">
							<input type="text" maxlength="5" name="ma" value="<?php echo $nodecantim->getElementsByTagName('ma')->item(0)->nodeValue; ?>" class="form-control1" id="focusedinput" placeholder="Mã sản phẩm tối đa 5 kí tự">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Tên</label>
						<div class="col-sm-8">
							<input type="text" maxlength="50" name="ten" value="<?php echo $nodecantim->getElementsByTagName('ten')->item(0)->nodeValue; ?>" class="form-control1" id="focusedinput" placeholder="Tên sản phẩm tối đa 50 kí tự">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Loại sản phẩm</label>
						<div class="col-sm-8">
							<input type="number" min="1" max="10" value="<?php echo $nodecantim->getElementsByTagName('loaisanpham')->item(0)->nodeValue; ?>" name="loaisanpham" class="form-control1" id="focusedinput" placeholder="Nhập số 1 - 10">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Giá</label>
						<div class="col-sm-8">
							<input type="number" min="1000" max="100000000000" value="<?php echo $nodecantim->getElementsByTagName('gia')->item(0)->nodeValue; ?>" name="gia" class="form-control1" id="focusedinput" placeholder="Giá bé hơn 100 tỷ">
						</div>
					</div>
					<div class="form-group">
						<label for="radio" class="col-sm-2 control-label">Trạng thái</label>
						<div class="col-sm-8">
							<div class="radio-inline"><label><input name="trangthai" value="Còn hàng" <?php  echo $nodecantim->getElementsByTagName('trangthai')->item(0)->nodeValue=='Còn hàng'?'checked':''; ?>  type="radio"> Còn hàng</label>
							</div>
							<div class="radio-inline"><label><input name="trangthai" value="Hết hàng" <?php  echo $nodecantim->getElementsByTagName('trangthai')->item(0)->nodeValue=='Hết hàng'?'checked':''; ?>  type="radio"> Hết hàng</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Số lượng</label>
						<div class="col-sm-8">
							<input type="number" min="0" max="9999" value="<?php echo $nodecantim->getElementsByTagName('soluong')->item(0)->nodeValue; ?>" name="soluong" class="form-control1" id="focusedinput" placeholder="Số lượng bé hơn 10000">
						</div>
					</div>
					<div class="panel-footer">
						<div class="form-group">
							<label for="exampleInputFile">Chọn ảnh sản phẩm</label>
							<input type="file" value="<?php echo $nodecantim->getElementsByTagName('hinh')->item(0)->nodeValue; ?>" id="exampleInputFile">
						</div>
					</div>
					<div class="text-center">
							<button type="submit" onclick="return confirm('Bạn có muốn thay đổi không?')" class="btn btn-success warning_2 hvr-reveal">Cập nhật</button>
							<a href="?p=listproduct" class="btn btn-default  hvr-reveal">Trở lại</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>