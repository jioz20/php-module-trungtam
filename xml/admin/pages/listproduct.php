<?php
$list = '../data/sanpham.xml';
$listproduct = simplexml_load_file( $list );

// echo '<pre>';
// print_r($listproduct);
// echo '</pre>';
?>
<div class="col-md-12 graphs">
	<div class="xs">
		<h3 align="center">Danh sách sản phẩm</h3>
		<div class="bs-example4" data-example-id="contextual-table">


			<table class="table">
				<a href="?p=addproduct" class="label btn-7 label-primary" name="them" value="them">Thêm sản phẩm</a>
				<thead>
					<tr>
						<th lass="col-md-2 white text-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="selectall"></th>
						<th class="col-md-2 white text-center">Tên</th>
						<th class="col-md-2 white text-center">Mã</th>
						<th class="col-md-2 white text-center">Giá</th>
						<th class="col-md-1.5 white text-center">Số lượng </th>
						<th class="col-md-1.5 white text-center" >Trạng thái</th>
						<th class="col-md-3 white text-center">Tác vụ</th>
					</tr>
				</thead>

				<form action="?p=delete" method="post">
					<?php 
					if($listproduct&&$listproduct->sanpham)
					{
						foreach($listproduct->sanpham as $value)
						{					
							?>
							<tbody>
								<tr class="active text-center">
									<td>
										<input name="delis[]" class="case" type="checkbox" value="<?php echo $value->ma; ?>">
									</td>
									<td><?php echo $value->ten ;?></td>
									<td><?php echo $value->ma ;?></td>
									<td><?php echo $value->gia ;?></td>
									<td><?php echo $value->soluong ;?></td>
									<td><?php echo $value->trangthai ;?></td>
									<td>
										<a href="?p=detailproduct&ma=<?php echo $value->ma; ?>" class="btn btn-sm btn-primary hvr-underline-from-left">Chi tiết</a>
										<a href="?p=editproduct&ma=<?php echo $value->ma?>" class="btn btn-sm btn-info hvr-underline-from-center">Cập nhật</a>
										<a href="?p=delproduct&ma=<?php echo $value->ma?>" onclick="return confirm('Bạn có muốn xoá không?')" class="btn btn-sm btn-success warning_3 hvr-underline-from-right">Xoá </a>
									</td>


								</tr>
							</tbody>
							<?php 
						}
					}
					?>
					<td>
						<input type="submit" name="delete" value="Delete" id="delete" onClick="return show_confirm22();">
					</td>
				</form>
			</table>
			

		</div>
	</div>
</div>