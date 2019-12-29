<?php

//$conn=mysqli_connect("localhost","ourcuet_jahid","Cuetappclub","ourcuet_jahiddb");
$conn=mysqli_connect('localhost','root','','airline');
if (!$conn) {
	die("Connection failed :" .mysqli_connect_error());
}

?>