<?php
session_start();
include 'connect.php';

$flight=$_POST['flight'];
$takeOff=$_POST['takeOff'];
$landing=$_POST['landing'];
$price=$_POST['price'];
$Route=$_POST['Route'];
$from=$_POST['from'];
$to=$_POST['to'];



$_SESSION['flight']=$flight;
$_SESSION['takeOff']=$takeOff;
$_SESSION['landing']=$landing;
$_SESSION['price']=$price;
$_SESSION['Route']=$Route;
$_SESSION['from']=$from;
$_SESSION['to']=$to;




$sql="insert into flight_section (flight_no, DC, AC , takeOff ,landing,route,fare) values('$flight','$from','$to','$takeOff','$landing','$Route','$price')  ";

$result=$conn->query($sql);


?>