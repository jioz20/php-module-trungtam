<?php 
    $infor = array();
    $infor = array
    (
       "infor1" => array("name" => "Trí", "old"=>"20", "result" => array(8,9,10)),
       "infor2" => array("name" => "Trân", "old"=>"20", "result"=> array(5,6,8)),
       "infor3" => array("name" => "Bảo", "old" => "19", "result"=> array(6,7,10))
    );
    
    echo "<pre>";
    print_r($infor);
    echo "</pre>";
    
// Truy cập phần tử
    echo "<pre>";
    print_r($infor["infor2"]["result"][2] = "3");
    print_r($infor["infor2"]["name"] = "Quế Trân");
    printf($infor["infor2"]["old"] = "21");
    echo "</pre>";
    
    echo "<pre>";
    print_r($infor);
    echo "</pre>";
    
    $name = "";
    $old = " ";
    $result = "";
    if(!empty($infor))
    {
        foreach($infor as $key => $value)
        {
          $name = $value["name"];
          $old = $value["old"];
          $result = $value["result"];
          $temp = 0;
          $count= 0;
          for($i = 0; $i < count($result) ;$i++)
          {
              $temp = $temp + $result[$i];
              $count++;
          }
          $arr = array_sum($value["result"]);
          echo "Name: ". $name. " - Sum: ". $arr. " - Average: ". ($temp/ $count) . "<br/>";
        }
    }

   
?>