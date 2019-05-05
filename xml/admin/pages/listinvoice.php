<?php
$list = '../data/hoadon.xml';
$listinvoice = simplexml_load_file( $list );

// echo '<pre>';
// print_r($listinvoice);
// echo '</pre>';
?>
<div class="col-md-12 graphs">
	<div class="xs">
		<h3 align="center">Danh sách hoá đơn</h3>
		<div class="bs-example4" data-example-id="contextual-table">


			<table class="table">
				<a href="?p=addinvoice" class="label btn-7 label-primary" name="them" value="them">Thêm hoá đơn</a>
				<thead>
					<tr>
						<th class="col-md-2 white text-center">Mã</th>
						<th class="col-md-2 white text-center">Số hoá đơn</th>
						<th class="col-md-2 white text-center">Ngày lập</th>
						<th class="col-md-2 white text-center">Mã thành viên</th>
						<th class="col-md-3 white text-center">Tác vụ</th>
					</tr>
				</thead>

				<tbody>
					<?php 
	  		if($listinvoice&&$listinvoice->hoadon)
			{
				foreach($listinvoice->hoadon as $value)
				{					
	 		 ?>
					<tr class="active text-center">
						<td><?php echo $value->ma ;?></td>
						<td><?php echo $value->sohoadon ;?></td>
						<td><?php echo $value->ngaylap ;?></td>
						<td><?php echo $value->mathanhvien ;?></td>
						<td>
							<a href="?p=detailinvoice&ma=<?php echo $value->ma; ?>" class="btn btn-sm btn-primary hvr-underline-from-left">Chi tiết</a>
							<a href="?p=editinvoice&ma=<?php echo $value->ma?>" class="btn btn-sm btn-info hvr-underline-from-center">Cập nhật</a>
							<a href="?p=delinvoice&ma=<?php echo $value->ma?>" onclick="return confirm('Bạn có muốn xoá không?')" class="btn btn-sm btn-success warning_3 hvr-underline-from-right">Xoá </a>
						</td>
					</tr>
					<?php 
				}
			}
			?>
				</tbody>
			</table>
		</div>
	</div>
</div>