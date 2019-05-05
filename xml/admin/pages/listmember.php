<?php
$list = '../data/thanhvien.xml';
$listmember = simplexml_load_file( $list );

// echo '<pre>';
// print_r($listmember);
// echo '</pre>';
?>
<div class="col-md-12 graphs">
	<div class="xs">
		<h3 align="center">Danh sách thành viên</h3>
		<div class="bs-example4" data-example-id="contextual-table">


			<table class="table">
				<a href="?p=addmember" class="label btn-7 label-primary" name="them" value="them">Thêm thành viên</a>
				<thead>
					<tr>
						<th class="col-md-1 white text-center">Mã</th>
						<th class="col-md-3 white text-center">Tên</th>
						<th class="col-md-1 white text-center">Số điện thoại</th>
						<th class="col-md-3 white text-center">Email</th>
						<th class="col-md-4 white text-center">Tác vụ</th>
					</tr>
				</thead>

				<tbody>
					<?php 
	  		if($listmember&&$listmember->thanhvien)
			{
				foreach($listmember->thanhvien as $value)
				{					
	 		 ?>
					<tr class="active text-center">
						<td><?php echo $value->ma ;?></td>
						<td><?php echo $value->ten ;?></td>
						<td><?php echo $value->sodienthoai ;?></td>
						<td><?php echo $value->email ;?></td>
						<td>
							<a href="?p=detailmember&ma=<?php echo $value->ma; ?>" class="btn btn-sm btn-primary hvr-underline-from-left">Chi tiết</a>
							<a href="?p=editmember&ma=<?php echo $value->ma?>" class="btn btn-sm btn-info hvr-underline-from-left">Cập nhật</a>
							<a href="?p=delmember&ma=<?php echo $value->ma?>" onclick="return confirm('Bạn có muốn xoá không?')" class="btn btn-sm btn-success warning_3 hvr-underline-from-left">Xoá </a>
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