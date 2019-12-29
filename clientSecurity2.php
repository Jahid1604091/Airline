<?php 
       include 'connect.php';
    $lino=$_POST['lno'];
    $pas=$_POST['pass'];
    
    
 
    $sql="select * from clientcode";
    $result=$conn->query($sql);

    $row=$result->fetch_assoc();
        $lno=$row['licence_no'];
        $pass=$row['password'];


if($lino==$lno && $pas==$pass){
   header("Location:userPanel.php");
    
}
           else{
          header("Location:errorCode.php");           
           } 
 ?>
