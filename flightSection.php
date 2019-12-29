<?php
session_start();
include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
   <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">
    <title>Flight Section</title>
    <link rel="shortcut icon" href="Images/favicon.ico" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/flightSection.css">
</head>
<body>
    <!------------------------- H E A D E R ----------------->
    <header>

        <a href="#"><img src="Images/logo_bbal.png" alt="logo"></a> 
        
           <div class="link ml-auto">
            <a class="mr-3" href="#">CONTACT US</a>
            <a href="#">INFORMATION</a>
           </div>
<!-------N A V - B A R ------>


    <nav class="navbar navbar-expand-md">
        <ul class="navbar-nav">
            <li class="nav-item"><a href="index.php">Home</a></li>
            <li class="nav-item"><a href="#">Plan a Trip</a>
                <div class="dropdown-content">
                    <a href="#">Book Flight</a>
                    <a href="#">Manage Booking</a>
                    <a href="#">Book Holidays</a>
                    <a href="#">Destination Map</a>
                    <a href="#">Destination Guide</a>
                    <a href="#">Optiontown</a>
                    <a href="#">Credit Card Authorization</a>
                    <a href="#">Refund Form</a>
                    <a href="#">Change/Refund Policy</a>
                </div>
            </li>
          
            
              <li class="nav-item"><a href="#">Loyalty Club</a>
              
              <div class="dropdown-content">
                    <a href="#">My Account</a>
                    <a href="#">Join the Club</a>
                    <a href="#">Earning Miles</a>
                    <a href="#">Redeeming Miles</a>
                    <a href="#">Claim Missing Miles</a>
                    <a href="#">FAQs</a>
                    <a href="#">Terms and Conditions</a>
                </div>
              
              </li>
              
              
            <li class="nav-item"><a href="#">Flight Info</a>
            
                <div class="dropdown-content">
                    <a href="#">Flight Status</a>
                    <a href="#">Flight Schedule</a>
                    <a href="#">Saeting Information</a>
                    <a href="#">Baggage Information</a>
                    <a href="#">Prohibited Articles</a>   
                </div>
            </li>
            
            
            <li class="nav-item"><a href="#">Services</a>
            
            <div class="dropdown-content">
                    <a href="#">Airport Services</a>
                    <a href="#">On-Board Your Flight</a>
                    <a href="#">Ground Handling</a>
                    <a href="#">In-Flight Duty Free</a>
                    <a href="#">In-Flight Magazine</a>
                    <a href="#">In-Flight Entertainment</a>
                    
                </div>
            
            </li>
           
            
              <li class="nav-item"><a href="#">About Us</a>
              
                <div class="dropdown-content">
                    <a href="#">Contact Us</a>
                    <a href="#">Customer Service</a>
                    <a href="#">Corporate Profile</a>
                    <a href="#">Fleet Information</a>
                    <a href="#">News and Announcements</a>
                </div>
              </li>
        </ul>
    </nav>
 </header>
      
      
      <!------------ B O D Y   P A R T ----------->
      
 
      
      
      <div class="container">
        <div class="row">
            <div class="col-md-4 main">
           
                <h5>Serach for Flights</h5>
                 Flight Type : <span class="type">
                 
                 <?php 
                
                   $type = $_SESSION['$tt'];
                    echo $type;
               
                ?>   
                
               </span>
                 <br>

                From : <span class="from"><?php echo $from=$_SESSION['$from'];?></span> <br>
                
                To : <span class="to"><?php echo $to=$_SESSION['$to'];?></span>
           
           
           
           
           </div>
             
             
            

      
             
             
             
             
            <!---------DIVIDED------------->
            <div class="col-md-8 main">
                 <div class="row">
                     
                     <div class="col-md-3 mx-4">
                         <h5 class="">Passengers</h5>
                         Adults : <span class="text"><?php echo $pa=(int)$_SESSION['$pa'];?></span> <br>
                         Children : <span class="text"><?php echo $pc=(int)$_SESSION['$pc'];?></span> <br>
                         Infants : <span class="text"><?php echo $pi=(int)$_SESSION['$pi'];?></span>
                         
                         <?php $total=$pa+$pc+$pi; ?>
                         
                     </div>
                     <div class="col-md-2 mx-4">
                         <h5 class="">Options</h5>
                         Cabin : <span class="text"><?php echo $_SESSION['$cc'];?></span>
                     </div>
                        
                    <div class="col-md-3 mx-4">
                         <h5 class="">Date</h5>
                         Derparting On : <span class="text"><?php echo $_SESSION['$do'];?></span>
                     </div>
                     
                     
                     </div>
                 </div>
        </div>
        
        
    </div>
        
    <!--------------------Table 1--------------->
         
        <div class="container">
            <div class="tblbg">
                <form method="post" action="confirmFlight.php" >
        
                <?php
        
                
       $sql="select * from flight_section where DC='$from' and AC='$to' ";
        $result = $conn->query($sql);
         
        if ($result->num_rows > 0) {
        echo "<table id='table'><tr><th>Flight(s)</th><th>Take Off</th><th>Route</th><th>Landing</th><th>Fare</th></tr>";
     
        while($row = $result->fetch_assoc()) {
            echo "<tr>
            
            <td style='cursor: pointer;'>".$row["flight_no"]."</td>
            <td style='cursor: pointer;'>".$row["takeOff"]."</td>
            <td style='cursor: pointer;'>".$row["route"]."</td>
            <td style='cursor: pointer;'>".$row["landing"]."</td>
            <td style='cursor: pointer;'>".$row["fare"]."</td>
            
            </tr>";
            
           
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
        ?>  
                 
                   
                                  
             
        <script>
                 
                 
            var total_pa="<?php echo $total   ?>";
            
                 
            window.onload = function () {
            function highlight(e) {
                if (selected[0]) selected[0].className = '';
                e.target.parentNode.className= 'selected';    
            }    
            var table = document.getElementById('table'),
               selected = table.getElementsByClassName('selected');
            table.onclick = highlight;
                
                
            $("#tst").click(function () {
            
            var bg = $(".selected td:first").html();
            var price = $(".selected td:last").html();
            var notes=$(".selected td:nth-child(3)").html();
            var dt=$(".selected td:nth-child(2)").html();
            var at=$(".selected td:nth-child(4)").html();
            var fare=$(".selected td:nth-child(5)").html();
                
               
            bg = bg || "No row Selected";
                
            var cost= total_pa*price;  
            localStorage.setItem("cost",cost);
            localStorage.setItem("bg",bg);
            localStorage.setItem("notes",notes);
            localStorage.setItem("dt",dt);
            localStorage.setItem("at",at);
            localStorage.setItem("fare",fare);
            localStorage.setItem("total_pa",total_pa);
                
              
               
        // window.loaction.href="http://confirmFlight.php";
                
               
    });
};
            
            </script>
               
                  
                  <br><br>
                  

              
             <input type="submit" class="btn btn-success" value="Continue" id="tst" onclick="fnselect()">
         </form>
            </div>
             
        </div>
         

             <!------------footer------------>
            <br><br>
 <footer>
     <div class="container">
     <div class="row">
        
   
    
        <div class="col-md-2">
            <dl>
                <dt><a href="#">Site Map</a></dt>
                <dd><a href="#"> Privacy Policy</a></dd>
                <dd><a href="#"> Terms & Conditions</a></dd>
            </dl>
        </div>
        <div class="col-md-2 mr-4">
            <dl>
                <dt><a href="#">Travel Agents</a></dt>
                <dd><a href="#">Now Available</a></dd>
                <dd><a href="#">Online Travel Agency(OTA)</a></dd>
            </dl>
        </div>
        <div class="col-md-2 mx-3">
            <dt><a href="#">Travel Agents</a></dt>
        </div>
        <div class="col-md-2 mr-2">
            <dl>
                <dt><a href="#">About Us</a></dt>
                <dd><a href="#">Contact Us</a></dd>
                <dd><a href="#">News</a>
                </dd><dd><a href="#">Citizen Charter</a>
                </dd>
                <dd><a href="#">Online Travel Agency(OTA)</a></dd>
            </dl>
        </div>
        <div class="col-md-3">
            <dl>
                <dt><a href="#">Corporate</a></dt>
                <dd><a href="#">Chairmen's Message</a></dd>
                <dd><a href="#">CEO's Message</a>
                </dd><dd><a href="#">Board of Direcors</a>
                </dd>
                <dd><a href="#">Executive Directors</a></dd>
            </dl>
        </div>
     </div>
 </div>
 </footer>
         
          
          
        
      
      
</body>
</html>
