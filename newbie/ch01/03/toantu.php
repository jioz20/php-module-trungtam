<?php 
    $x = 10;
    $y = "10";
    echo"So sánh thường: ";
    $a = ($x == $y) ? "True" :"False";
    echo $a;
    echo"<br/> So sánh tuyệt đối: ";
    $b = ($x === $y) ?"True": "False";
    echo $b;
    
    echo " <br/> So sánh XOR: "; //Chỉ đúng khi một mệnh đề đúng
    $c = ($x > 0 XOR $y > 0) ? "True": "False";
    echo $c;
    echo "<br/> Phủ định: ";
    $d = (!($x > 0)) /* 10 > 0 => True (!True = False) */ ? "True" : "False";
    echo $d;
?>