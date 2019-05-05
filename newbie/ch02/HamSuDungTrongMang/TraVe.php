<?php
    $a = array("one"=> "1", "two"=> "2", "three"=>"3"); 
    //KQ thường
        echo "<pre>";
        print_r($a);
        echo "</pre>";
    //Tạo mảng $i mới và vẫn giữ giá trị đó
        $b = array_values($a);
        echo "<pre>";
        print_r($b);
        echo "</pre>";
    //Lấy giá trị $i của mảng ban đầu
        $c = array_keys($a);
        echo "<pre>";
        print_r($c);
        echo "</pre>";
        
        // array_pop: xóa phần tử cuối cùng và trả về phần tử đó
        // array_shift: xóa phần tử đầu tiên và trả về phần tử đó
        
        $d = array_pop($a);
        echo "<pre>". "Phân tử cuối là: ";
        print_r($d);
        
        $e = array_shift($a);
        echo "<pre>". "Phân tử đầu là: ";
        print_r($e);
        
        $a = array("one", "two", "three", "one", "three");
        $f = array_unique($a); // xóa phần tử trùng
        echo "<pre>";
        print_r($f);
        echo "</pre>";
        
        unset($a[1]);        // xóa phần tử tại một vị trí nào đó
        echo "<pre>";
        print_r($a);
        echo "</pre>";
        
        array_push($a, "five", "six"); //thêm phần tử vào cuối mảng
        echo "<pre>";
        print_r($a);
        echo "</pre>";
        
        array_unshift($a, "zero"); //thêm phần tử vào đầu mảng
        echo "<pre>";
        print_r($a);
        echo "</pre>";
        
        $g = array_reverse($a); // Đảo ngược mảng
        echo "<pre>";
        print_r($g);
        echo "</pre>";
        
                /*1. count ($array)
                Trả về  số phần tử của mảng

                2. array_values ($array)
                Trả về một mảng liên tục có các phần tử có giá trị là giá trị lấy từ các phần tử của mảng $array

                3. array_keys ($array)
                Trả về một mảng liên tục có các phần tử có giá trị là khóa lấy từ các phần tử của mảng $array.

                4. array_pop ($array)
                Loại bỏ phần tử cuối cùng của mảng. Hàm trả về phần tử cuối cùng đã được loại bỏ.

                5. array_push ($array, $val1, $val2, … , $valn)
                Thêm một hoặc nhiều phần tử vào cuối mảng $array. Hàm trả về kiểu số nguyên là số lượng phần tử của mảng $array mới

                6. array_shift ($array)
                Loại bỏ phần tử đầu tiên của mảng. Hàm trả về phần tử đầu tiên đã được loại bỏ.

                7. array_unshift ($array, $val1, $val2, … , $valn)
                Thêm một hoặc nhiều phần tử vào đầu mảng $array. Hàm trả về kiểu số nguyên là số lượng phần tử của mảng $array mới

                8. array_flip ($array)
                Trả về một mảng có khóa và giá trị được hoán đổi cho nhau so với mảng $array (giá trị thành khóa và khóa thành giá trị)

                9. sort ($array)
                Sắp xếp mảng $array theo giá trị tăng dần

                10. array_reverse ($array)
                Đảo ngược vị trí các phần tử của mảng
                
                11. array_merge ($array1, $array2, …, $arrayn) 
                Nhập 2 hay nhiều mảng thành một mảng duy nhất và trả về mảng mới
                12. array_rand ($array, $number)
                Lấy ngâu nhiên $number phần tử từ mảng $array và đưa vào màng mới (lấy giá trị khóa)
                13. array_search ($value,$array)
                Tìm phần tử mang giá trị $value trong mảng $array. Trả về khóa của phần tử tìm được.
                14. array_slice ($array, $begin. $finish)
                Trích lấy 1 đoạn phần tử của mảng $array từ vị trí $begin đến vị trí $finish. Phần tư đầu tiên (chỉ số 0), phần tử cuối cùng (chỉ số -1 hay count($array) – 1)
                15. array_unique ($array)
                Loại bỏ những phần tử trùng nhau trong mảng và trả về mảng mới
                16. implode ($str, $array)
                Chuyển các giá trị của mảng $array thành một chuỗi bao gồm các phần tử cách nhau bởi ký tự $str
                17. explode ($delimiter, $str)
                Chuyển một chuỗi thành một mảng. Tách chuỗi dựa vào $delimiter, mỗi đoàn tách ra sẽ thành một phần tử của mảng mới
                18. serialize ($value)
                Chuyển chuỗi/mảng/đối tượng $value thành một chuỗi đặc biệt để lưu vào cơ sở dữ liệu
                19. unserialize ($value)
                Chuyển chuỗi đặc biệt được tạo từ serialize($value) về trạng thái ban đầu
                20. array_key_exists ($key, $array)
                Kiểm tra khóa $key có tồn tại trong mảng $array hay không? Nếu có trả về giá trị true.
                21. in_array ($value, $array)
                Kiểm tra giá trị $value có tồn tại trong mảng $array hay không? Nếu có trả về giá trị true.
                22. array_diff ($array1, $array2)
                Trả về một mảng bao gồm các phần tử có giá trị tồn tại trong mảng $array1 nhưng không tồn tại trong mảng $array2
                23. array_diff_assoc ($array1, $array2)
                Trả về một mảng bao gồm các phần tử có khóa tồn tại trong mảng $array1 nhưng không tồn tại trong mảng $array2
                24. array_intersect ($array1, $array2)
                Trả về một mảng bao gồm các phần tử giống nhau về giá trị giữa 2 mảng $array1 và $array2
                25. array_intersect_assoc ($array1, $array2)
                Trả về một mảng bao gồm các phần tử giống nhau về khóa và giá trị giữa 2 mảng $array1 và $array2
                26. array_combine ($keys, $values)*/
?>