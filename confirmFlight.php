<?php
session_start();

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
    <title>Confirm Itinerary</title>
    <link rel="shortcut icon" href="Images/favicon.ico" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/flightSection.css">
    <link rel="stylesheet" href="css/ConfirmFlight.css">
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
     <form action="reservation.php" method="post">
     
     <h2 class="p-3 confrm">Confirm Flights</h2>
     
     <div class="outer">
         <div class="itenerary">
             <h3 class="bg-dark text-white">Travel Itinerary</h3>
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
            <br>
        <div class="priceDeatils">
             <h3 class="bg-dark text-white">Pricing Details</h3>
             <table>
                 <thead>
                     <tr>
                         <th>Base Fare</th><th>Surcharges</th><th>Fees</th><th>Taxes</th><th>Fare</th><th>Quantity</th><th>Total Fare</th>
                     </tr>
                 </thead>
                 
                 <tbody>
                     <tr>
                         <td><script>window.onload=document.write(localStorage.getItem('fare'));  </script></td>
                         <td>0</td><td>0</td><td>200</td>
                         <td><script>var a=localStorage.getItem('fare'); var a=parseInt(a,10); var b=a+200; document.write(b); </script>
                         </td>
                         
                         <td><script>var q=localStorage.getItem('total_pa'); var q=parseInt(q,10); document.write(q); </script></td>
                         
                         <td><script>document.write(q*b)</script></td>
                     </tr>
                 </tbody>
             </table>
             
         </div>
         <br>
        <div class="TermsConditions">
             <h3 class="bg-dark text-white">Terms And Conditions</h3>
             <div class="conatiner">
                 <div class="row">
                     <div class="col-md-6">
                         <p class="cond"> TERMS AND CONDITIONS FOR INTERNET BOOKINGS
With the introduction of booking/ticketing through IBE (Internet Booking Engine) which permits passengers to purchase tickets by using debit or credit card through Biman’s web-link www.biman-airlines.com.
PASSENGER AWARENESS
You are fully aware of the verification and are advised to present your credit card; those passengers who fail to present their credit card must not be accepted for travel. 
INTERNET BOOKINGS
The Biman Bangladesh Airlines Internet booking system is currently available only for flights operated by Biman Bangladesh Airlines. You will use the Biman Bangladesh Airlines online booking facility to make only legitimate reservations. You can book online for a maximum of 6 passengers in a single booking which can be a combination of adults and children. Infants can also be booked provided each infant is accompanied by an adult. You are responsible for the correctness of the age of children and infants booked by you online. An infant is one who has not yet reached his/her second birthday on the date of commencement of journey while a child is one who has reached his/her second birthday but not yet reached his/her twelfth birthday on the date of commencement of journey. Bookings within 48 hours of departure cannot be made through our Website. Please contact the nearest Biman Bangladesh Airlines office for any assistance. You are responsible to read all ‘Fare rules’ mentioned on each web page displayed while booking on our website. Biman Bangladesh Airlines will consider as accepted these notes and rules if you complete booking process. User in his own interest is requested to confirm this information from the nearest Biman Bangladesh Airlines office in case of any doubts. The passengers are requested to confirm the time, and date of departure from the nearest booking office, Airport or through the website in advance before the journey. Biman Bangladesh Airlines assumes no responsibility whatsoever on account of delay or cancellation of flight for any reason whatsoever including change in flight schedule. 
USER PROFILE
In order to make bookings you may register online on our website and, a user ID will be allotted to you, which can be used in all future transactions. Your personal profile such as email address, home and business address, phone and fax numbers will be stored. This will help us in providing you with our optimum service and save your time for future bookings. Your user ID and password are confidential and should not be revealed to any person to prevent its misuse. All information shall be provided at the option of the passenger and Biman Bangladesh Airlines bears no liability towards the same.
MODE OF PAYMENT
The mode of payment will be through credit cards [Visa / MasterCard]. 
AGE AND WARRANTY
You suppose that you are of sufficient legal age to use this service, and you possess the legal right and ability to create binding obligations for any liability you may incur as a result of the use of this service. You warrant that all information supplied by you and members of your family in using the booking facility are true and accurate. 
DOCUMENTATIONS (WHEREVER APPLICABLE)
The responsibility to ensure the correctness of all documentations including valid resident permit, passport & visa (if required) rests solely with you. Biman Bangladesh Airlines will not be responsible for any complication arising out of incomplete or improper documentation on your part.
AIRPORT TAXES
At the time of ticketing all known taxes will be collected on your ticket. Some airports will levy an airport departure tax, which is payable by passengers at the airport locally.
CONDITIONS OF CONTRACT
The carriage of passengers and their baggage by air will be subject to the Conditions of Carriage of the carrier. General Terms & Conditions for Passengers & Baggage handling will be followed.
RIGHTS AND RESTRICTIONS
Biman Bangladesh Airlines and its licensors retain all rights (including copyright and patent rights) with respect to all software and underlying information and material available through the Biman Bangladesh Airlines Online booking facility. You must not download or otherwise export or re-export any software or underlying information or material available through the Biman Bangladesh Airlines Online booking facility except with the written permission of Biman Bangladesh Airlines Ltd.
PROHIBITION OF UNLAWFUL US
You will not use the Biman Bangladesh Airlines online booking facility to make any speculative, false or fraudulent reservation. You will not use this Website for any purpose that is unlawful or prohibited by these Conditions of Use. You must not:


</p>
                     </div>
                     
                     <div class="col-md-6 terms">
                        <p class="cond mr-4"> TERMS AND CONDITIONS FOR INTERNET BOOKINGS
With the introduction of booking/ticketing through IBE (Internet Booking Engine) which permits passengers to purchase tickets by using debit or credit card through Biman’s web-link www.biman-airlines.com.
PASSENGER AWARENESS
You are fully aware of the verification and are advised to present your credit card; those passengers who fail to present their credit card must not be accepted for travel. 
INTERNET BOOKINGS
The Biman Bangladesh Airlines Internet booking system is currently available only for flights operated by Biman Bangladesh Airlines. You will use the Biman Bangladesh Airlines online booking facility to make only legitimate reservations. You can book online for a maximum of 6 passengers in a single booking which can be a combination of adults and children. Infants can also be booked provided each infant is accompanied by an adult. You are responsible for the correctness of the age of children and infants booked by you online. An infant is one who has not yet reached his/her second birthday on the date of commencement of journey while a child is one who has reached his/her second birthday but not yet reached his/her twelfth birthday on the date of commencement of journey. Bookings within 48 hours of departure cannot be made through our Website. Please contact the nearest Biman Bangladesh Airlines office for any assistance. You are responsible to read all ‘Fare rules’ mentioned on each web page displayed while booking on our website. Biman Bangladesh Airlines will consider as accepted these notes and rules if you complete booking process. User in his own interest is requested to confirm this information from the nearest Biman Bangladesh Airlines office in case of any doubts. The passengers are requested to confirm the time, and date of departure from the nearest booking office, Airport or through the website in advance before the journey. Biman Bangladesh Airlines assumes no responsibility whatsoever on account of delay or cancellation of flight for any reason whatsoever including change in flight schedule. 
USER PROFILE
In order to make bookings you may register online on our website and, a user ID will be allotted to you, which can be used in all future transactions. Your personal profile such as email address, home and business address, phone and fax numbers will be stored. This will help us in providing you with our optimum service and save your time for future bookings. Your user ID and password are confidential and should not be revealed to any person to prevent its misuse. All information shall be provided at the option of the passenger and Biman Bangladesh Airlines bears no liability towards the same.
MODE OF PAYMENT
The mode of payment will be through credit cards [Visa / MasterCard]. 
AGE AND WARRANTY
You suppose that you are of sufficient legal age to use this service, and you possess the legal right and ability to create binding obligations for any liability you may incur as a result of the use of this service. You warrant that all information supplied by you and members of your family in using the booking facility are true and accurate. 
DOCUMENTATIONS (WHEREVER APPLICABLE)
The responsibility to ensure the correctness of all documentations including valid resident permit, passport & visa (if required) rests solely with you. Biman Bangladesh Airlines will not be responsible for any complication arising out of incomplete or improper documentation on your part.
AIRPORT TAXES
At the time of ticketing all known taxes will be collected on your ticket. Some airports will levy an airport departure tax, which is payable by passengers at the airport locally.
CONDITIONS OF CONTRACT
The carriage of passengers and their baggage by air will be subject to the Conditions of Carriage of the carrier. General Terms & Conditions for Passengers & Baggage handling will be followed.
RIGHTS AND RESTRICTIONS
Biman Bangladesh Airlines and its licensors retain all rights (including copyright and patent rights) with respect to all software and underlying information and material available through the Biman Bangladesh Airlines Online booking facility. You must not download or otherwise export or re-export any software or underlying information or material available through the Biman Bangladesh Airlines Online booking facility except with the written permission of Biman Bangladesh Airlines Ltd.
PROHIBITION OF UNLAWFUL US
You will not use the Biman Bangladesh Airlines online booking facility to make any speculative, false or fraudulent reservation. You will not use this Website for any purpose that is unlawful or prohibited by these Conditions of Use. You must not:


</p>
                     </div>
                 </div>
             </div>
         </div>
         
         <hr>
         
         <div class="total">
            <p> <input type="checkbox"> I agree to the above terms and conditions</p>
             <h4>Total Cost : BDT <script>document.write(q*b)</script></h4>
             
             <button type="submit" class="btn-1">Continue >></button>
           
        <input type="button" class="btn-back" onclick="history.go(-1);" value="<< Change Flight">
 
         </div>
         
     </div>
     
 </form>
 </div>
      
      
             
             
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