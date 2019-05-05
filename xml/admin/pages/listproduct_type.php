<?php
$list = '../data/loaisanpham.xml';
$listproduct_type = simplexml_load_file( $list );

// echo '<pre>';
// print_r($listinvoice);
// echo '</pre>';
?>
<div class="col-md-12 graphs">
	<div class="xs">
		<h3 align="center">Danh sách loại sản phẩm</h3>

		<div class="bs-example4" data-example-id="contextual-table">
		<a href="?p=addproduct_type" class="label btn-7 label-primary" name="them" value="them">Thêm loại sản phẩm</a>			
			<table class="table">
				<thead>
					<tr>
						<th class="col-md-3 white text-center" >Mã</th>
						<th class="col-md-3 white text-center" >Tên</th>
						<th class="col-md-3 white text-center" >Trạng thái</th>
						<th class="col-md-3 white text-center">Tác vụ</th>
					</tr>
				</thead>

				<tbody>
			<?php 
	  		if($listproduct_type&&$listproduct_type->loaisanpham)
			{
				foreach($listproduct_type->loaisanpham as $value)
				{					
	 		 ?>
					<tr class="active text-center">
						<td><?php echo $value->ma ;?></td>
						<td><?php echo $value->ten ;?></td>
						<td><?php echo $value->trangthai ;?></td>
						<td>
							<a href="?p=detailproduct_type&ma=<?php echo $value->ma; ?>" class="btn btn-sm btn-primary hvr-underline-from-left">Chi tiết</a>
							<a href="?p=editproduct_type&ma=<?php echo $value->ma?>" class="btn btn-sm btn-info hvr-underline-from-center">Cập nhật</a>
							<a href="?p=delproduct_type&ma=<?php echo $value->ma?>" onclick="return confirm('Bạn có muốn xoá không?')" class="btn btn-xs btn-success warning_3 hvr-underline-from-right">Xoá </a>
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