<?php
if ( !isset( $_GET[ 'ma' ] ) || !$_GET[ 'ma' ] )
	chuyentrang( '?p=listproduct_type' );
$ma = $_GET[ 'ma' ];
$path = '../data/loaisanpham.xml';
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
		<h3 style="text-align: center">Quản lý loại sản phẩm</h3>
		<div class="tab-content">
			<div class="tab-pane active" id="horizontal-form">
				<form class="form-horizontal" method="post">
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Mã</label>
						<div class="col-sm-8">
							<input type="text" maxlength="5" placeholder="Mã tối đa 5 kí tự" name="ma" value="<?php echo $nodecantim->getElementsByTagName('ma')->item(0)->nodeValue; ?>" class="form-control1" id="focusedinput">
						</div>
						<div class="col-sm-2">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Tên</label>
						<div class="col-sm-8">
							<input type="text" placeholder="Tên tối đa 30 kí tự" maxlength="30" value="<?php echo $nodecantim->getElementsByTagName('ten')->item(0)->nodeValue; ?>" name="ten" class="form-control1" id="focusedinput">
						</div>
						<div class="col-sm-2">
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
					<div class="text-center">
							<button type="submit" onclick="return confirm('Bạn có muốn thay đổi không?')" class="btn btn-success warning_2 hvr-reveal">Cập nhật</button>
							<a href="?p=listproduct_type" class="btn btn-default hvr-reveal">Trở lại</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>