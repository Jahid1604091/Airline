<?php
session_start();

$myemail=$_SESSION['$myemail'];
$mypassword=$_SESSION['$mypassword'];

    
include 'connect.php';

$sql="select * from pass_info where email='$myemail' and pass='$mypassword' ";
$result=$conn->query($sql);
$row=$result->fetch_assoc();

$name=$row['name'];
$phn=$row['cell'];



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
    <title>View Reservation </title>
    <link rel="shortcut icon" href="Images/favicon.ico" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/flightSection.css">
    <link rel="stylesheet" href="css/ConfirmFlight.css"> 
    <link rel="stylesheet" href="css/pass_info.css"> <link rel="stylesheet" href="css/reservation.css">
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
      
      
      <!------------BODY   PART----------->
      
 <div class="container">
  
      <div class="main">
         <br>
          <div class="action">
              <h5>Reservation Action</h5>
              <p>Seats have been reserved for you on the flights requested.</p>

              <div class="button-tag">
                 <input type="button" value="Print" class="mx-4" onclick="print()">
                  <input type="button" value="Complete Purchase" class="mx-4" onclick="window.location.href='completeReservation.php' ">
                  <input type="button" value="Modify Information" class="mx-4" onclick="window.location.href='flightSection.php'"> 
                  <br>
                  <input type="button" value="Send via Email" class="mx-4 px-3 my-1">
                  <input type="button" value="Cancel Reservation" class="mx-4 my-1" onclick="cancel()">
                  <input type="button" value="Seats and Selections" class="mx-4 my-1">
              </div>
          <!----------PRINT SECTION---------->
          
          
          
         
          
          
          
          
          
          </div>

            <br>

       <div class="outer">
            <div class="heading">
                <p class="h5">Biman Bangladesh Airlines <span class="h1">Reservation</span></p>
                <hr>
            </div>
            
            <div class="logopart">
                <div class="row">
                    <div class="col-md-4">
                        <img src="Images/agency_logo.png" alt="">
                    </div>
                    <div class="col-md-8">
                        <label for="" class="booked">Booked By : </label>
                        Biman Website <br>
                        <label for="">Contact : </label>
                        Website (www.biman-airlines.com) <br>
                        ibebiman@bdbiman.com
                        
                    </div>
                    
                </div>
            </div>
            <hr>
            
            <div class="itinerary">
             <h4>Travel Itinerary</h4>
             <h6>   
             <?php
             
             echo $_SESSION['$from']."-->".$_SESSION['$to'];
           
             ?> 
             
             </h6>
             
             <?php
             
             
              echo "<table><tr><th>Date</th><th>Time</th><th>Flight Number</th><th>Notes</th></tr>";
             
              echo "<tr><td>".$_SESSION['$do']."</td>  
              <td><script>window.onload=document.write(localStorage.getItem('dt'));</script> - <script>window.onload=document.write(localStorage.getItem('at'));</script></td>  
              
              
              <td><script>window.onload=document.write(localStorage.getItem('bg'));</script></td>  
              <td><script>window.onload=document.write(localStorage.getItem('notes'));</script></td></tr>"."</table>";
             ?>
         </div>
            
            <hr>
            <div class="ticket">
             <h4>Ticket Details</h4>
             
             <table>
                 <thead>
                     <tr>
                         <th>Passenger Name</th>
                         <th>Contact No</th>
                         <th>Baggage Allowance</th>
                         <th>Price</th>
                     </tr>
                 </thead>
                 
                 <tbody>
                     <tr>
                         <td><?php echo $name;?></td>
                         <td><?php echo $phn;?></td>
                         <td>20 Kg</td>
                         <td>
                             
                             
                        <script>  
                         
                        var a=localStorage.getItem('fare'); 
                        var a=parseInt(a,10); var b=a+200; 
                         
                         
                         var q=localStorage.getItem('total_pa');
                        var q=parseInt(q,10);  
                         
                        document.write(q*b)</script>
                             
                         </td>
                     </tr>
                 </tbody>
             </table>

         </div>
         
         <br>
         <div class="exchnage">
             <h4>Refund / Exchange Rules</h4>
             <table id="t2">
                 <thead>
                     <tr>
                         <th>Trip Segment</th>
                         <th>Change Fees</th>
                         <th>Cancel Fees</th>
                     </tr>
                 </thead>
                 
                 <tbody>
                     <tr>
                         <td><?php
             
             echo $_SESSION['$from']."-->".$_SESSION['$to'];
           
             ?> </td>
                         <td><span>BDT 1,300 after departure</span><br>
                         <span>BDT 1,300 within 24 hours of departure</span>
                         <span>BDT 800 more than 24 hours before departure</span></td>
                         
                          <td><span>BDT 1,300 after departure</span><br>
                         <span>BDT 1,300 within 24 hours of departure</span>
                         <span>BDT 800 more than 24 hours before departure</span></td>
                     </tr>
                 </tbody>
             </table>
         </div>
         <br>
         
         
         <div class="pending">
             <h4>Pending Transaction</h4>
         </div>
         
         <table>
             <thead>
                 <tr>
                     <th>Description</th>
                     <th>Base Fare</th>
                     <th>Surcharges</th>
                     <th>Taxes</th>
                     <th>Fees</th>
                     <th>Total Amount</th>
                 </tr>
             </thead>
             
             <tbody>
                 <tr>
                     <td>Reservation (Unpaid)</td>
                     <td><script>document.write(q*a);</script></td>
                     <td>0</td>
                     <td>200</td>
                     <td>0</td>
                     <td><script>document.write(q*b);</script></td>
                 </tr>
             </tbody>
         </table>
       </div>
      
      
      </div>
      
 </div>
      
      
       <script type="text/javascript">
                function print(outer){
                 var printContents = document.getElementsByClassName(outer).innerHTML;
                    w=window.open();
                    w.document.write(printContents);
                    w.print();
                    w.close();
                }
            }
            
              </script>
              
              <script>
    function cancel(){
                alert("Cancel the flight ?");
               window.location.href="index.php";
            }
                
    </script>
              
       <!------------footer------------>
             
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