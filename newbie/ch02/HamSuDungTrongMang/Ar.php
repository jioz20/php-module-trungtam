<?php 
    $a = array("Kis", "Nguyễn", "201");
    if(!empty($a))
    {

        echo "<pre>";
        print_r($a). "<br/>";
        echo "</pre>";
        
        foreach($a as $key=>$value)
            echo $value."<br/>";
        // Mảng liên tục
        for($i =0; $i < count($a);$i++)
            echo $a[$i]."<br/>"; 
    }
    
    $b = array();
//    $b["I"] = "Minh Trí";
//    $b["Love"]= "Yêu";
//    $b["You"] = "Người lạ";
//    $b[] = "0";
//    $b[] = "1";    
//    echo "<pre>";
//    print_r($b);
//    echo"</pre>";
// Mảng không liên tục
    $b = array("1"=>"!", "2"=>"@", "3"=>"$");
    if(!empty($b))
    {
        foreach($b as $key => $value)
        {
            echo "[".$key."]=".$value. "</br>";
        }
    }
    else 
        echo "Mảng rỗng";
   
?>