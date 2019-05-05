<?php
    $ten = "Kis";
    $tenLot = "Nguyen";
    $so = "201";
    echo $ten ." ". $tenLot . " " . $so;  //Nối 2 chuỗi là dùng dấu chấm
?>

<?php 
    echo "<br/>";
    $tenTong = $ten ." ". $tenLot ." ". $so;
    echo "<br/>";
    var_dump($tenTong); // Cho biết tên và ở kiểu dữ liệu nào.
    echo "<br/> Kiểu dữ liệu là: ";
    echo gettype($tenTong); // Trả về kiểu dữ liệu. 
?>

<?php 
    $number = 12.03;
    settype($number, "double");
    echo "<br/> Giá trị trả về kiểu double: ", $number;
    settype($number, "integer"); //Giống ép kiểu
    echo "<br/> Giá trị trả về kiểu int " , $number;
    echo "<br/> Kiểu dữ liệu số: ",is_numeric($number);   
?>

<?php 
    define("Nguyen", "Kis");
    echo "<br/> Biến lưu define: ", Nguyen; 
?>