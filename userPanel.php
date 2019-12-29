
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
    <title>User Panel</title>
    <link rel="shortcut icon" href="Images/favicon.ico" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/flightSection.css">
    <link rel="stylesheet" href="css/ConfirmFlight.css"> 
    <link rel="stylesheet" href="css/pass_info.css"> <link rel="stylesheet" href="css/reservation.css">
    <link rel="stylesheet" href="css/userPanel.css">
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
              <h5>You can now easily update your Flights </h5>
              <p>Just Follow our Instructions to have a successful upgration:</p>
            
            <div class="instruction mx-2">
                a) <kbd>Flight No</kbd> must be unique. Duplicate number is not acceptable. <br>
                      <abbr title="">b) Departing and arrival city code :</abbr> <br>
                         <small>1. Between Bangladesh : single digit code and start with the first letter of the cities . i,e. DC=Dhaka and AC=Khulna, flight no will start like DK-1/DK-2/DK-3 etc. <br>
                         2. Bangladesh and Other Cities : double digit code and start with the first letter of the cities . i,e. DC=Dhaka and AC=Abu Dhabi, flight no will start like xDA-11/xDA-12  etc. <br>
                         3. Except Bangladesh : thriple digit code and start with the first letter of the cities . i,e. DC=Abu Dhabi and AC=Bangkok, flight no will start like yAB-111/yAb-112  etc.</small>
                    
                
            </div>
            
            
              <!------------insertion--------------->
               
            <div class="inserton">
                <h6 class="text-center">Insert a new flight here :</h6>
                <form action="insert.php" method="post" class="needs-validation" novalidate>
    <div class="form-group">
      <label for="flight">Flight No:</label>
      <input type="text" class="form-control" id="flight" placeholder="Enter Flight No" name="flight" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="from">Departing City:</label>
      <input type="text" class="form-control" id="" placeholder="Enter the Departing City" name="from" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
     
     <div class="form-group">
      <label for="to">Arrival City:</label>
      <input type="text" class="form-control" id="" placeholder="Enter the Arrival City" name="to" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
     
     <div class="form-group">
      <label for="takeOff">Take Off Time:</label>
      <input type="time" class="form-control" id="takeOff" placeholder="Enter the Take Off Time" name="takeOff" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
     
     <div class="form-group">
      <label for="landing">Landing Time:</label>
      <input type="time" class="form-control" id="landing" placeholder="Enter the Landing Time" name="landing" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
     
     <div class="form-group">
      <label for="price">Flight Fare :</label>
      <input type="text" class="form-control" id="price" placeholder="Enter the Flight Fare" name="price" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
     
     <div class="form-group">
      <label for="Route">Route Information:</label>
      <input type="text" class="form-control" id="Route" placeholder="Enter the Route" name="Route" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
   <!---  <div class="form-group form-check">
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label> 
      
    </div> --->
    
    <button type="submit" class="btn btn-success btn-block">Insert</button>
  </form>
            </div>

<br><br><br>
    
            
            
            
             <!----------------UPGRADTION--------------->
            <div class="deletion">
                <h6 class="text-center">Update a flight here :</h6>
                <form action="update.php" method="post" class="needs-validation" novalidate>
    <div class="form-group">
      <label for="flight">What do you want to Update ? </label>
      <select name="updt"  onchange="showfield(this.options[this.selectedIndex].value)">
          <option value="dlt" >DELETE A FLIGHT</option>
          <option value="takeOff" selected>TAKE OFF TIME</option>
          <option value="landing">LANDING TIME</option>
          <option value="fare">FARE</option>
          <option value="route">ROUTE</option>
      </select>
      
     <div id="div1">
     <input type="text" name="other" placeholder="Please give your new information" />
     </div>
     
      <label for="">Enter your desired Flight No </label>
      <input type="text" placeholder="" name="fn" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
   
    
    <button type="submit" class="btn btn-primary btn-block">Update</button>
  </form>
            </div>
            
            
<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
    
    
    
    
    function showfield(name){
  if(name!='dlt' ) document.getElementById('div1').style.display="block";
  else document.getElementById('div1').style.display="none";
      
        
}
    
 
    
</script>

            </div>
              
         
    
          
          </div>

            <br>

      
      
      
      </div>
      
 </div>
      
      
       <!------------footer------------>
             
 
             
             
            
             
 
         
          
      
      
</body>
</html>