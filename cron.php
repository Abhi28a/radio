<?php
require 'db.php';
$query="SELECT * FROM `schedule`";
$sql=mysqli_query($con,$query);
date_default_timezone_set('Asia/Kolkata');
$current_time=date("Y-m-d H:i:s");
$time=strtotime(date("Y-m-d H:i:s"));
while($row=mysqli_fetch_assoc($sql)){
    $start=strtotime($row['start_time']);
    $stop=strtotime($row['stop_time']);
    if($time>=$start and $time<$stop){
        echo "Log ==>".$current_time."Triggered";
    }else{
        echo "Not Triggered";
    }
}
?>