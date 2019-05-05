<?php
if ( !isset( $_GET[ 'ma' ] ) || !$_GET[ 'ma' ] )
	chuyentrang( '?p=listinvoice' );
$ma = $_GET[ 'ma' ];
$path = '../data/hoadon.xml';
$doc = new DOMDocument();
$nodecantim = edit_xml( $path, $ma, $doc );
if ( isset( $_POST[ 'ma' ] ) && $nodecantim ) {
	foreach ( $_POST as $k => $v )
		$nodecantim->getElementsByTagName( $k )->item( 0 )->nodeValue = $v;
	if(is_numeric($_POST[ 'sohoadon' ]))
		$doc->save( $path );
}
?>
<div class="graphs">
	<div class="xs">
		<h3 style="text-align: center">Quản lý hoá đơn</h3>
		<div class="tab-content">
			<div class="tab-pane active" id="horizontal-form">
				<form class="form-horizontal" method="post">
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Mã</label>
						<div class="col-sm-8">
							<input type="text" maxlength="10" name="ma" value="<?php echo $nodecantim->getElementsByTagName('ma')->item(0)->nodeValue; ?>" class="form-control1" id="focusedinput" placeholder="Mã hoá đơn tối đa 10 kí tự">
						</div>
						<div class="col-sm-2">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Số hoá đơn</label>
						<div class="col-sm-8">
							<input type="text" maxlengh="10" name="sohoadon" value="<?php echo $nodecantim->getElementsByTagName('sohoadon')->item(0)->nodeValue; ?>" class="form-control1" id="focusedinput" placeholder="Số hoá đơn tối đa 10 kí tự">
						</div>
						<div class="col-sm-2">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Ngày lập</label>
						<div class="col-sm-8">
							<input type="date" min="2000-1-1" max="2018-12-31" name="ngaylap" value="<?php echo $nodecantim->getElementsByTagName('ngaylap')->item(0)->nodeValue; ?>" class="form-control1" id="focusedinput">
						</div>
						<div class="col-sm-2">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Mã thành viên</label>
						<div class="col-sm-8">
							<input type="text" maxlength="10" name="mathanhvien" value="<?php echo $nodecantim->getElementsByTagName('mathanhvien')->item(0)->nodeValue; ?>" class="form-control1" id="focusedinput" placeholder="Mã thành viên tối đa 10 kí tự">
						</div>
						<div class="col-sm-2">
						</div>
					</div>
					<div class="text-center">
							<button type="submit" onclick="return confirm('Bạn có muốn thay đổi không?')" class="btn btn-success warning_2 hvr-reveal">Cập nhật</button>
							<a href="?p=listinvoice" class="btn btn-default hvr-reveal">Trở lại</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>