<?php
session_start();
include 'connect.php';

$title=$_POST['title'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$name=$title." ".$fname." ".$lname;



$date=$_POST['date'];
$mnth=$_POST['mnth'];
$yr=$_POST['yr'];
$bdate=$date."-".$mnth."-".$yr;



$phn=$_POST['phn'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$notify=$_POST['notify'];


$_SESSION['name']=$name;
$_SESSION['phn']=$phn;
$_SESSION['email']=$email;


$query = "SELECT * FROM pass_info WHERE name='$name' OR email='$email' OR cell='$phn' ";
    $result1=$conn->query($query);
    if($result1->num_rows > 0 ) { 
        header('Location:dialog.php');
        
    }else{
        $sql="INSERT INTO pass_info (name,bdate,cell,email,pass) VALUES ('$name', '$bdate','$phn','$email','$pass')";
        $result=$conn->query($sql);
       
        header("location:index.php");
    }
	
	mysqli_close($conn);


?>






















































































































































