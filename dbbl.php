
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
   
    <title>DBBL Mobile Banking</title>
    <link rel="shortcut icon" href="Images/favicon.ico" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dbbl.css">
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
      

     
<div class="total">
    
  
     
    <div class="heading-part">

         <div class="logo">
             <img src="Images/dbbl.png" alt="" width="90">
         </div>
         <div class="heading-text">
             <h1>Dutch-Bangla Bank Limited</h1>
             <p><b>Y</b>OUR <b>T</b>RUSTED <b>P</b>ARTNER</p>
         </div>

        <div class="logo2">
             <img src="Images/Rocket.png" alt="" width="90" height="70">
         </div>
         
         <h1 class="nexus">DBBL NEXUS GATEWAY</h1>
         
    </div>
 
 
 
 
 <div class="content">
     <b><p>Mobile Account Information</p></b><br>
      <div class="logo">
             <img src="Images/norton.png" alt="" width="140">
      </div>
<form action="succesTransaction.php" enctype="multipart/form-data" method="post">
      <div class="info" id="info">
          <label for="" class="ma"> Mobile Account </label><input type="text" name="ma"><br>
         
           <label for="" class="pin"> PIN</label>
          <input type="text" name="pin"> <br>
          
            <label for="">Amount BDT :</label> <script> var a=localStorage.getItem('fare'); 
                        var a=parseInt(a,10); var b=a+200; 
                         
                         
                         var q=localStorage.getItem('total_pa');
                        var q=parseInt(q,10);  
                         var total=q*b;
                        document.write(total);</script><br>
          <button class="btn1" type="submit" onclick="succesTransaction.php">SUBMIT</button>
          <button onclick="reset()">RESET</button>
          <button onclick="window.location.href='payment.php'">BACK</button>
      </div>
</form>   
      <div class="verify">
             <img src="Images/varify.png" alt="" width="170" height="130">
      </div>
 </div>
 <br><br>
 
 
     <div class="bottom-part">
         <b><p>DBBL E-COM With Biman Bangladesh Airlines </p></b>
         <p>ecom1.dutchbanglabank.com</p>
     </div>
</div>       
          
          
   <!-----------R E S E T------------->
     
<script>
function reset() {
  document.getElementById("info").reset();
}
</script>

     
      
      

      
 
      
       <!------------footer------------>
             

             
            
             
 
         
          
      
      
</body>
</html>