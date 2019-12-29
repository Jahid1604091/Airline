
<?php
session_start();

$conn=mysqli_connect('localhost','root','','airline');
if (!$conn) {
	die("Connection failed :" .mysqli_connect_error());
}

	//$selected = mysqli_select_db("login", $dbhandle);
	

	$myemail = $_POST['email'];
	$mypassword = $_POST['pass'];
	
	$myemail = stripslashes($myemail);
	$mypassword = stripslashes($mypassword);
	
	$query = "SELECT * FROM pass_info WHERE  email='$myemail' AND pass='$mypassword' ";
    $result1=$conn->query($query);
    if($result1->num_rows > 0 ) { 
        header('Location:flightSection.php');
        
    }else{
       
       
        header("location:loginDialog.php");
    }
	

$_SESSION['$myemail']=$myemail;
$_SESSION['$mypassword']=$mypassword;

	mysqli_close($conn);
?>