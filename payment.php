

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
    <link rel="stylesheet" href="css/pass_info.css"> 
    <link rel="stylesheet" href="css/reservation.css">
    <link rel="stylesheet" href="css/completeReservation.css">
    <link rel="stylesheet" href="css/payment.css">
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
        <br><br>
           <div class="outer">
           <br>
            <p class="PNR">Please make note of your PNR and save it for your reference: #
            </p>
            
            <div class="type">
                <h5 class="">Select Payment Type</h5>
                <p>Please select the type of payment that you would like to use:</p>
                <span>Payment Options: </span>
    <select name="paymentOption" id="paymentOption" onchange="">
        <option value="Please Select">Please Select</option>
        <option value="K Payment Gateway">Foreign VISA/MasterCard</option>
        <option value="bKash">bKash (Mobile Bangking)</option>
        <option value="1,DBBL Nexus Card">DBBL Nexus Card</option>
        <option value="2,DBBL Nexus Card">DBBL Debit MasterCard</option>
        <option value="3,DBBL Nexus Card">DBBL Debit VISA Card</option>
        <option value="4,DBBL Nexus Card">Bangladeshi VISA - via DBBL Gateway</option>
        <option value="5,DBBL Nexus Card">Bangladeshi MasterCard - via DBBL Gateway</option>
        <option name="dbbl" value="dbbl.php">DBBL Mobile Banking</option>
        <option value="1,CBL">Amex Card</option>
        <option value="2,CBL">Bangladeshi VISA - via The City Bank Gateway</option>
        <option value="3,CBL">Bangladeshi MasterCard - via The City Bank Gateway</option>
        
        </select>
            </div>
            
            <h5>Credit/Debit Card payment conditions</h5>
            <span>Your card will be charged BDT </span>
            <span class="bdt"><script> var a=localStorage.getItem('fare'); 
                        var a=parseInt(a,10); var b=a+200; 
                         
                         
                         var q=localStorage.getItem('total_pa');
                        var q=parseInt(q,10);  
                         var total=q*b;
                        document.write(total);</script></span>
              <br>
            
            
            <div class="warning">
                <input type="checkbox" required> I hereby acknowledge that the actual amount I see on my credit card bill may differ due to the different bank fees and currency conversion rates. Biman Bangladesh Airlines Ltd. is not responsible for any charges that may be levied by the Card Issuing Bank.
            </div>
            <div class="warning">
                <input type="checkbox" required> Deportation charges: <br>
                I do accept to be charged back for any deportee or inadmissible charges e.g. fine, penalty, hotel, food etc. levied by concern immigration authority to Biman Bangladesh Airlines in connection with the purchase of this ticket (in case of deportation).
            </div>
            <br>
            <p>For your security and protection, this credit card payment process requires 3D Secure / Verified By Visa authentication. Credit card payments may only be accepted by cards issued from banks who support this security option. For more information please visit our 3DS FAQ page.</p>
            
            <p><span class="mark text-dark">NOTE:</span> If the holder of the credit card is not a travelling passenger, then the passenger may be required to present the following items at the time of check-in:</p>
            <p>a) A Photocopy of both sides of the credit card, which will have to be self-attested by the credit card holder authorizing the use of the credit card for the purchase of the ticket. For security reasons, please strike out the Card Verification Value (CVV) code on the copy of your credit card.</p>
            <p>b) This Photocopy should also contain the name of the passenger, the date of journey and the sector on which the journey is made.</p>
            <h5>CREDIT/DEBIT CARD VERIFICATION REQUIRED: </h5>
            <div class="warning">The passenger(s) will NOT be allowed to travel, until the credit/debit card has been verified by Biman Bangladesh Airlines. <br>
            
            <a href="#">Click here</a> to download the Credit/Debit Authorization Letter
            </div>
            <p><input type="checkbox"> I have read and accept the Credit/Debit Card Payment Conditions</p>
            <br>
            <input type="button" value="Go Back">
            <input type="button" value="Continue" id="continue">
         </div>
         
         
         
       </div>
      
      
      </div>
      
 

<script>
$(document).ready(function() {
 

   $("#continue").click(function(){
      //this will find the selected website from the dropdown
      var select= $("#paymentOption").find(":selected").val();
      
      //this will redirect us in new tab
      document.location.href = select;
   });
  
});
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