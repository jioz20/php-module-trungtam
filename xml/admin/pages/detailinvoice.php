<?php
	$ma = $_GET[ 'ma' ];
	$path = '../data/hoadon.xml';
	$doc = new DOMDocument();
	$nodecantim = edit_xml( $path, $ma, $doc );
?>
<div class="graphs">
	<div class="xs">
		<h3 style="text-align: center">Chi tiết hoá đơn</h3>
		<div class="tab-content">
			<div class="tab-pane active" id="horizontal-form">
				<form class="form-horizontal" method="post">
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Mã</label>
						<div class="col-sm-8">
							<input type="text" name="ma" value="<?php echo $nodecantim->getElementsByTagName('ma')->item(0)->nodeValue; ?>" class="form-control1" id="focusedinput" readonly>
						</div>
						<div class="col-sm-2">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Số hoá đơn</label>
						<div class="col-sm-8">
							<input type="text" name="sohoadon" value="<?php echo $nodecantim->getElementsByTagName('sohoadon')->item(0)->nodeValue; ?>" class="form-control1" id="focusedinput" readonly>
						</div>
						<div class="col-sm-2">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Ngày lập</label>
						<div class="col-sm-8">
							<input type="date" name="ngaylap" value="<?php echo $nodecantim->getElementsByTagName('ngaylap')->item(0)->nodeValue; ?>" class="form-control1" id="focusedinput" readonly>
						</div>
						<div class="col-sm-2">
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Mã thành viên</label>
						<div class="col-sm-8">
							<input type="text" name="mathanhvien" value="<?php echo $nodecantim->getElementsByTagName('mathanhvien')->item(0)->nodeValue; ?>" class="form-control1" id="focusedinput" readonly>
						</div>
						<div class="col-sm-2">
						</div>
					</div>
					<div class="text-center">
						<a href="?p=listinvoice" class="btn btn-default hvr-reveal">Quay lại</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>