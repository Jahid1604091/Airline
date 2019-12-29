<?php
session_start();
include 'connect.php';
$value=$_POST['other'];
$flight=$_POST['fn'];
$update=$_POST['updt'];
  

if($update=='dlt'){
    $sql="delete from flight_section where flight_no='$flight' ";
}

else if($update=='takeOff'){
    
    $sql="update flight_section set takeOff='$value' where flight_no='$flight'  ";
    
}
else if($update=='landing'){
     $sql="update flight_section set landing='$value' where flight_no='$flight'  ";
}
else if($update=='fare'){
     $sql="update flight_section set fare='$value' where flight_no='$flight'  ";
}
else if($update=='route'){
     $sql="update flight_section set route='$value' where flight_no='$flight'  ";
}

$result=$conn->query($sql);



header("Location:userPanel.php");
?>

