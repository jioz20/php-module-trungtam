<?php
if ( !isset( $_GET[ 'ma' ] ) || !$_GET[ 'ma' ] )
	chuyentrang( '?p=listproduct' );
$ma = $_GET[ 'ma' ];
$path = '../data/sanpham.xml';
$doc = new DOMDocument();
$nodecantim = edit_xml( $path, $ma, $doc );
?>
<div class="graphs">
	<div class="xs">
		<h3 style="text-align: center">Chi tiết sản phẩm</h3>
		<div class="tab-content">
			<div class="tab-pane active" id="horizontal-form">
				<form class="form-horizontal" method="post">
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Mã</label>
						<div class="col-sm-8">
							<input type="text"  name="ma" value="<?php echo $nodecantim->getElementsByTagName('ma')->item(0)->nodeValue; ?>" class="form-control1" id="focusedinput" readonly>
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Tên</label>
						<div class="col-sm-8">
							<input type="text" name="ten" value="<?php echo $nodecantim->getElementsByTagName('ten')->item(0)->nodeValue; ?>" class="form-control1" id="focusedinput" readonly>
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Loại sản phẩm</label>
						<div class="col-sm-8">
							<input type="number" value="<?php echo $nodecantim->getElementsByTagName('loaisanpham')->item(0)->nodeValue; ?>" name="loaisanpham" class="form-control1" id="focusedinput" readonly>
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Giá</label>
						<div class="col-sm-8">
							<input type="number" value="<?php echo $nodecantim->getElementsByTagName('gia')->item(0)->nodeValue; ?>" name="gia" class="form-control1" id="focusedinput" readonly>
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Trạng thái</label>
						<div class="col-sm-8">
							<input type="text" value="<?php echo $a =  ($nodecantim->getElementsByTagName('trangthai')->item(0)->nodeValue == 'Còn hàng') ? 'Còn hàng' : 'Hết hàng'; ?>" class="form-control1" id="focusedinput" name="trangthai" readonly>
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Số lượng</label>
						<div class="col-sm-8">
							<input type="number" value="<?php echo $nodecantim->getElementsByTagName('soluong')->item(0)->nodeValue; ?>" name="soluong" class="form-control1" id="focusedinput" readonly>
						</div>
					</div>
					<div class="text-center">
						<a href="?p=listproduct" class="btn btn-default  hvr-reveal">Quay lại</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>