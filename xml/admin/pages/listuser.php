<div class="col-md-12 graphs">
	<div class="xs">
		<h3 align="center">Danh sách người dùng</h3>
		<div class="bs-example4" data-example-id="contextual-table">

			<table class="table">
				<a href="?p=adduser" class="label btn-7 label-primary" name="them" value="them">Thêm người dùng</a>
				<thead>
					<tr>
						<th class="col-md-1 white text-center">Mã</th>
						<th class="col-md-2 white text-center">Tên</th>
						<th class="col-md-2 white text-center">Giới tính</th>
						<th class="col-md-2 white text-center">Ngày sinh</th>
						<th class="col-md-2 white text-center">Trạng thái</th>
						<th class="col-md-3 white text-center">Tác vụ</th>
					</tr>
				</thead>
				<?php           
    $path = '../data/nguoidung.xml';
    // tạo đối tượng DOMDocument
    $doc= new DOMDocument();
    //tải toàn bộ nội dung XML vào đối tượng $doc
    $doc->load($path);
    // tìm root trong đối tượng $doc
    $root=$doc->documentElement;
    // lấy danh sách root ra 
    $nodecantim="";
    $listnodenguoidung = $root->childNodes;
    foreach($listnodenguoidung as $node)
    {
      if($node->nodeType==XML_ELEMENT_NODE)
      {
        $nodethuoctinhs = $node->childNodes;
        foreach($nodethuoctinhs as $nodethuoctinh)
        {
          if($nodethuoctinh->nodeType==1)
          { 
?>
				<body>
					<tr class="active text-center">
						<td><?php echo $node->getElementsByTagName('ma')->item(0)->nodeValue; ?></td>
						<td><?php echo $node->getElementsByTagName('ten')->item(0)->nodeValue; ?></td>
						<td><?php echo $node->getElementsByTagName('gioitinh')->item(0)->nodeValue;?></td>
						<td><?php echo $node->getElementsByTagName('ngaysinh')->item(0)->nodeValue; ;?></td>
						<td><?php echo $node->getElementsByTagName('trangthai')->item(0)->nodeValue; ?></td>
						<td>
							<a href="?p=detailuser&ma=<?php echo $node->getElementsByTagName('ma')->item(0)->nodeValue; ?>" class="btn btn-sm btn-primary hvr-underline-from-left">Chi tiết</a>							
							<a href="?p=edituser&ma=<?php echo $node->getElementsByTagName('ma')->item(0)->nodeValue; ?>" class="btn btn-sm btn-info hvr-underline-from-center">Cập nhật</a>
							<a href="?p=deluser&ma=<?php echo $node->getElementsByTagName('ma')->item(0)->nodeValue; ?>" onclick="return confirm('Bạn có muốn xoá không?')" class="btn btn-xs btn-success warning_3 hvr-underline-from-right">Xoá </a>				
						</td>
					</tr>
			<?php
			break;
			}
		}
	}
}
			?>
					<!--       <script>
        var del = document.getElementById("xoa");
        del.onclick = function()
        {
          if(confirm('Bạn có muốn xoá không?'))
            chuyentrang('?p=deluser');
        }
      </script> -->
				</body>
			</table>
		</div>
	</div>
</div>