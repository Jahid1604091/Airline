
<?php session_start();  

$tt=$_POST['TT'];
$_SESSION['$tt']=$tt;

$from=$_POST['DC'];
$_SESSION['$from']=$from;

$to=$_POST['AC'];
$_SESSION['$to']=$to;


$pa=$_POST['PA'];
$_SESSION['$pa']=$pa;


$pc=$_POST['PC'];
$_SESSION['$pc']=$pc;


$pi=$_POST['PI'];
$_SESSION['$pi']=$pi;


$cc=$_POST['CC'];
$_SESSION['$cc']=$cc;


$do=$_POST['DO'];
$_SESSION['$do']=$do;


$ro=$_POST['RO'];
$_SESSION['$ro']=$ro;

header("Location:login.php");

?>




















































































































































