<?php
$date = new DateTime("2019-12-11 00:00:00");
$date->modify("+2 hours");
$right_time = $date->format("Y-m-d H:i A");
$current_time = date("Y-m-d H:i:sO");
var_dump($right_time);
var_dump("##########");
var_dump($current_time);
// if($current_time < $date)
// {
//      echo "Your Can Edit Your Number". $current_time;
//     echo $right_time."|".$current_time ;
// }
// else
// {
// 	echo "Can't Edit Your Number". $current_time;
//     echo $right_time."|".$current_time ;
// }
?>
