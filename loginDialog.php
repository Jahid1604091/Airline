<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>dialog box</title>
    <link rel="stylesheet" href="css/dialogBox.css">
    <link rel="stylesheet" href="css/dialog.css">
</head>
<body>
   
   
    <div id="white-background">
       


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
 
    <title>Biman Bangladesh Airline</title>
    <link rel="shortcut icon" href="Images/favicon.ico" />
    <link rel="stylesheet" href="css/style.css">
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


    <nav class="navbar navbar-expand-md navbar navbar-light">
       
       
       
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
          </button>
            
                <div class="collapse navbar-collapse" id="navbarNav">
       
       
       
       <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item"><a href="index.php">Home</a></li>
            <li class="nav-item"><a href="#">Plan a Trip</a>
                <div class="dropdown-content">
                    <a href="index.php">Book Flight</a>
                    <a href="manage_booking.php">Manage Booking</a>
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
        
        
        </div>
    </nav>
 </header>
      
 <!---------------M A I N    B O D Y------------->  

<div class="container">
  <div class="row">
   <!-------------LEFT PART------------>
    <div class="col-12 col-md-5">
       <div id="booking">
	    
    <form method="post" id="content" class="flight" action="login.php">
       <h4 class="ml-3">Book My Flight</h4> <hr>
        
        <span class="search-type ml-3">
            <input type="radio" id="TT_RT" name="TT" onclick="changeTripType(this);" value="Round Trip" checked=""> 
            <label onclick=";" for="TT_RT" class="TT_RT">Round Trip</label>
            <input type="radio" id="TT_OW" name="TT" onclick="changeTripType(this);" value="One Way" class="ml-4"> 
            <label onclick=";" for="TT_OW" class=" TT_OW">One Way</label>
            <i class="fas fa-angle-right ml-3"></i>
            <a href="#" class="mcity">Multi-City</a>
        </span>
       
           <span class="cities">
            <label class="ml-3"><h3>From</h3></label> 
            <select name="DC" class="empty" required>
            
            <option value="" selected="">Departure City</option>
            <?php 
                include 'connect.php';
                $sql="select distinct DC from flight_section";
                $result=$conn->query($sql);
                
                while($row=$result->fetch_assoc()){
                    $from=$row['DC'];
                    echo "<option>$from</option>";
                }
                
                  ?>
               </select>
            <br>
           
             <label class="ml-3"><h3>To</h3></label>
            <select name="AC" class="empty" required>
            <option value="" selected="">Arrival City</option>
            <?php 
                include 'connect.php';
                $sql="select distinct AC from flight_section";
                $result=$conn->query($sql);
                
                while($row=$result->fetch_assoc()){
                    $to=$row['AC'];
                    echo "<option>$to</option>";
                }
                
                  ?>
            
            </select>
        </span> <br>
        <hr>
        <span class="dates">
            <label class="ml-3">Departing On</label>
            <input type="date" class="empty" name="DO" required>
            
            <label class="ml-3">Returning On</label>
            <input type="date" class="empty" name="RO" required>
            
            <label class="ml-3">My Dates Are</label>
            <input type="radio" name="FL" id="FL_ON" value="on" checked="checked" class="ml-4"> 
            <label for="FL_ON" class="choice">Flexible</label>
            <input type="radio" name="FL" id="FL_OFF" value="" class="ml-4"> <label for="FL_OFF" class="choice">Fixed</label>
            
        </span> <hr>
        <span class="fieldset passengers">
            <span class="pax-type-PA">
                <label class="ml-3">Adults <sup>(12+)</sup></label>
                <select name="PA" class="empty"><option selected="" value="1">Adults: 1</option><option value="2">Adults: 2</option><option value="3">Adults: 3</option><option value="4">Adults: 4</option><option value="5">Adults: 5</option><option value="6">Adults: 6</option></select>
            </span>
            <br>
            <span class="pax-type-PC">
                <label class="ml-3">Children <sup>(2-11)</sup></label>                                            
                <select name="PC" class="empty"><option value="">None</option><option value="1">Children: 1</option><option value="2">Children: 2</option><option value="3">Children: 3</option><option value="4">Children: 4</option><option value="5">Children: 5</option></select>
            </span>
            <br>
            <span class="pax-type-PI">
                <label class="ml-3">Infants <sup>(under 2)</sup></label>                                                    
                <select name="PI" class="empty"><option value="">None</option><option value="1">Infants: 1</option></select>
            </span>
            <br>
        </span>
        <span class="fieldset options">
            <label class="ml-3">Cabin Class</label>
            <select name="CC" class="empty" required><option value="">Any Cabin</option><option value="J">Business Class</option><option value="Y">Economy Class</option></select> <br>
           
             <label class="ml-3">Promo Code</label>
            <input type="text" name="CD" class="empty">
            
            <input type="image" src="Images/searchflights.png" alt="Search Flights" value="Search Flights" class="ml-5 p-1" name="search">
        </span>
    </form>
    
    
    <form method="post" class="form-2">
       <div class="login mt-1">
            <a href="login.php"><img src="Images/login.jpg" alt=""></a>
        </div>
    </form>
        
        <div class="join mt-1">
            <a href="loyaltiClub.php"><img src="Images/3rdpart.jpg" alt=""></a>
        </div>
</div>
    </div>
        
       
       <!---------RIGHT PART------------>
    <div class="col-md-7">
       
      <div class="slideshow-container">

  <div style="text-align:center" class="dot-bg">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
  </div>
  <div class="mySlides fade">
   
    <img src="Images/slide1.png" width="635" height="350">
    
  </div>

  <div class="mySlides fade">
    
    <img src="Images/slide2.png" width="635" height="350">
    
  </div>

  <div class="mySlides fade">
    
    <img src="Images/slide3.jpg" width="635" height="350">
    
  </div>
 
</div>
    
      <!------Divide 7 into two----> 
       
    <div class="row">
      
       <!------Flight Deals---->
        <div class="col-md-6">
           <div class="Table">
              <table class="table table-borderless">
               <thead><h5>Flight Deals</h5></thead>
                    <tbody>
                    <tr>
                        <td>KUALA LUMPUR <br><small>[KUL]</small> </td><td>to</td>
                        <td class="border-right">DHAKA<br><small>[DAC]</small></td>
                        <td class="myr">MYR 983<br><small class="smaler">round trip/including taxes</small></td>
                        
                    </tr>
                         
                    <tr>
                        <td>ABU DHABI<br><small>[AUH]</small></td><td>to</td>
                        <td class="border-right">DHAKA<br><small>[DAC]</small></td>
                        <td class="myr">AED 1,558<br><small class="smaler">round trip/including taxes</td>
                    </tr>
                       
                    <tr>
                        <td>DAMMAM<br><small>[DMM]</small></td><td>to</td>
                        <td class="border-right">DHAKA<br><small>[DAC]</small></td>
                        <td class="myr">SAR 1,494<br><small class="smaler">round trip/including taxes</td>
                    </tr>
                       
                    <tr>
                        <td>DHAKA<br><small>[DAC]</small></td><td>to</td>
                        <td class="border-right">BANGKOK<br><small>[BKK]</small></td>
                        <td class="myr">BDT 19,671<br><small class="smaler">round trip/including taxes</td>
                    </tr>
                    
                </tbody>
            </table> 
           </div>
            
            <div class="userHelp">
             <a href="userPanel.php"><img src="Images/user.jpeg" alt=""></a>   
             <h3><pre>U s e r    P a n e l</pre></h3>
            </div>
            
        </div>
        
        <!------News---->
        <div class="col-md-1">
           
            <div class="news">
               <h5>NEWS</h5>
                <div id="articles">
		<a href="/about/news?id=64f1dbf8-958d-4079-a4ec-e37359e9fc18"><h3>প্রেস রিলিজ</h3></a>
		<p>বিমান বাংলাদেশ এয়ারলাইন্সের সেবা সপ্তাহ শুরু</p>
		<a href="/about/news?id=bd353e4d-0853-4369-b029-ebfc55d75fdc"><h3>Press Release</h3></a>
		<p>Biman Captain Ishtiaque Hossain acquires outstanding achievement.</p>
		<a href="/about/news?id=801ec67c-a133-4c71-96bc-37abf6a01c24"><h3>প্রেস রিলিজ</h3></a>
		<p>বিমান পাইলট ক্যাপ্টেন ইশতিয়াক হোসাইন-এর বিরল সম্মান অর্জন
</p>
		<a href="/about/news?id=e66a1566-8239-478f-983b-db1f4f070a45"><h3>প্রতিবাদ</h3></a>
		<p>আনলাইন পত্রিকা aviationnewsbd.com এবং jagonews24.com  এ প্রকাশিত ‘‘ বোর্ডের সিদ্ধান্ত আমলে নিচ্ছে না বিমান বাংলাদেশ এয়ারলাইন্স’’ খবরের প্রতিবাদ</p>
		<a href="/about/news?id=50953da9-d658-489b-9cb3-2ed41750edd3"><h3>প্রেস রিলিজ</h3></a>
		<p>ঢাকা -দিল্লী রুটে চালু হচ্ছে বিমানের সরাসরি ফ্লাইট</p>
		<a href="/about/news?id=7ddb9b6d-f90b-4ab7-bd1f-e158973c46b3"><h3>প্রেস রিলিজ</h3></a>
		<p>প্রেস বিজ্ঞপ্তি</p>
		<a href="/about/news?id=69726d00-f3c8-49f2-9f1c-ad1f72105824"><h3>প্রেস রিলিজ</h3></a>
		<p>বিমান এর উদ্যোগে ‘‘ লালজমিন’’ নাটকের ২০০তম মঞ্চায়ন।</p>
		<a href="/about/news?id=2e2dbfbf-7ec4-483d-9c89-2d51253d71fd"><h3>The Daily Star News</h3></a>
		<p>'AvGeek' Sam Chui lands in Dhaka</p>
		<a href="/about/news?id=335d5e56-c468-4761-b2ad-55d1c605d84d"><h3>BSS News</h3></a>
		<p>PM appreciates pilots, crew of Biman exposed to hijack threat</p>
		<a href="/about/news?id=2d9d094d-81d3-4103-9458-b7ec76a1c568"><h3>প্রেস বিজ্ঞপ্তি</h3></a>
		<p>অভ্যন্তরীণ ভ্রমণে ফটো আইডি’র ব্যবহার</p>
		<a href="/about/news?id=d93cd951-6420-4a70-9c72-ed7b3d276629"><h3>Press Release</h3></a>
		<p> বিমানের ৪৭তম প্রতিষ্ঠাবার্ষিকী উৎযাপিত</p>
		<a href="/about/news?id=1dfbf8e0-eda2-4a3a-832e-2ee09f682af5"><h3>প্রেস রিলিজ</h3></a>
		<p>দেশে আসলো দ্বিতীয় ড্রীমলাইনার হংসবলাকা নতুন মাইলফলকে বিমান</p>
		<a href="/about/news?id=2564c559-186b-46f2-b580-1a20ffd33319"><h3>প্রেস রিলিজ</h3></a>
		<p>প্রকাশিত সংবাদের প্রতিবাদ</p>
		<a href="/about/news?id=7a589e04-a139-4d5c-bb9d-d7d449dae9c3"><h3>ছবি রিলিজ</h3></a>
		<p>ছবিতে বোয়িং ৭৮৭-৮ উড়োজাহাজের উদ্বোধনী অনুষ্ঠান-০১</p>
		<a href="/about/news?id=03fb745b-93b8-496e-9fe5-72ad6a6af49b"><h3>প্রেস রিলিজ</h3></a>
		<p>আকাশবীণা’র উদ্বোধন করলেন গণপ্রজাতন্ত্রী 
বাংলাদেশ  সরকারের মাননীয়  প্রধানমন্ত্রী</p>
		<a href="/about/news?id=12bfaa07-f93c-4c4a-9756-415e0280f637"><h3>প্রেস রিলিজ</h3></a>
		<p>বুধবার বোয়িং ৭৮৭-৮  ড্রীমলাইনার  উড়োজাহাজ (আকাশবীণা)-র উদ্বোধন করবেন গণপ্রজাতন্ত্রী বাংলাদেশ  সরকারের মাননীয় প্রধানমন্ত্রী, শেখ হাসিনা।</p>
		<a href="/about/news?id=2450e06e-2bae-4c68-b557-5532afff7bb4"><h3>ছবি রিলিজ</h3></a>
		<p>বিমান শ্রমিক লীগ(সিবিএ)-এর উদ্যেগে জাতীয় শোক দিবসের আলোচনা অনুষ্ঠান</p>
		<a href="/about/news?id=db5ffb7b-7936-49bb-97d4-fd041f00dcf4"><h3>প্রেস রিলিজ</h3></a>
		<p>বিমান-এর ফিরতি হজ্জ ফ্লাইট আগামী কাল শুরু</p>
		<a href="/about/news?id=c067d262-1af5-4f97-87af-4337e7edad2f"><h3>ছবি রিলিজ</h3></a>
		<p>বিমান বহরের নতুন অতিথি ৭৮৭ ড্রীমলাইনারের (আকাশবীণা) আগমন উপলক্ষে হযরত শাহজালাল বিমানবন্দরে ছিল আনন্দঘন মূহুর্ত তারই কিছু স্থিরচিত্র।</p>
		<a href="/about/news?id=a0304bbe-7e50-4a26-b7e9-dea78b9c789e"><h3>press release</h3></a>
		<p>আগামীকাল ১৯আগষ্ট ২০১৮  রবিবার দেশে আসছে বিমানের প্রথম ড্রীমলাইনার</p>
		<a href="/about/news?id=372c3559-e075-4dcc-bec1-fcb3f7681221"><h3>Boeing 787 vedio Download link</h3></a>
		<p>Boeing 787 Video download link-2</p>
		<a href="/about/news?id=bdadf930-c85f-4f1a-9f23-ee588f037898"><h3>BIMAN-APA 2018</h3></a>
		<p>The Annual Performance Agreement (APA)-2018-19 between Biman Bangladesh Airlines and Ministry of Civil Aviation and Tourism.</p>
		<a href="/about/news?id=2c703b18-b303-412e-8618-d169f5b2a1f2"><h3>Aircraft 787-8 picture</h3></a>
		<p>বিমান বহরে অাসন্ন ৭৮৭ ড্রিমলাইনার উড়োজাহাজের কিছু চিত্র।</p>
		<a href="/about/news?id=c32b6dae-472f-4ede-a9ce-3b5f89809a53"><h3>Press Release</h3></a>
		<p>Biman ticket available through mobile phone</p>
		<a href="/about/news?id=97bfda52-48f9-47bc-a7e2-e51457151a11"><h3>প্রেস রিলিজ</h3></a>
		<p>মোবাইলে কেনা যাবে বাংলাদেশ বিমানের টিকেট</p>
		<a href="/about/news?id=769aa101-c754-4b7b-a5f1-30c8bc186dd7"><h3>প্রেস রিলিজ</h3></a>
		<p>বিমান বাংলাদেশ ট্রাভেল এ্যান্ড ট্যুরিজম মেলায়

৬টি আন্তর্জাতিক রুটে বিমানের টিকেটে ২০% ছাড়!!!
</p>
		<a href="/about/news?id=5d453138-6c84-4739-8c34-abef8f8243b1"><h3>প্রেস রিলিজ</h3></a>
		<p>বিমান বাংলাদেশ এয়ারলাইন্স টাইটেল স্পন্সর

রাজধানীতে ৩ দিনের সর্ববৃহৎ আন্তর্জাতিক পর্যটন মেলা
</p>
		<a href="/about/news?id=a1c93ac5-cec2-4563-9b97-ffbd4fd023ec"><h3>Photo</h3></a>
		<p> বিমানে যোগ হওয়া ছয়টি বোয়িং-এর মতোই এবারও 
বিমানের ফ্লিটে আসন্ন চারটি ড্রিমলাইনার-এর  নাম চূড়ান্ত করেছেন গণপ্রজাতন্ত্রী বাংলাদেশ সরকারের মাননীয়  প্রধানমন্ত্রী শেখ হাসিনা।</p>
		<a href="/about/news?id=222b92bd-261f-4606-a658-90dc6a6b5ca3"><h3>News Link</h3></a>
		<p>Biman increases flight frequency on domestic routes</p>
		<a href="/about/news?id=cb3a4ed3-f9ba-4607-8735-9a0fd2d6aa76"><h3>News Link</h3></a>
		<p>Biman starts 3rd weekly Jeddah flight from Chittagong </p>
		<a href="/about/news?id=ce6cb8e7-9c4e-4385-9533-32a7ed03788e"><h3>News Link</h3></a>
		<p>অভ্যন্তরীণ রুটে ফ্লাইট বাড়ালো বিমান</p>
		<a href="/about/news?id=28092ecf-c234-4d21-9f35-25ef708ca34f"><h3>প্রেস রিলিজ</h3></a>
		<p>চট্টগ্রাম থেকে জেদ্দা সাপ্তাহিক ৩য় ফ্লাইট  বিজি ১৩৫ এর শুভ উদ্বোধন </p>
		<a href="/about/news?id=d4135714-93ed-46ac-bfa1-c087149f6cfe"><h3>প্রেস রিলিজ</h3></a>
		<p>অভ্যন্তরীণ রুটে ফ্লাইট বৃদ্ধি করলো বিমান</p>
		<a href="/about/news?id=8015cf7b-7847-40b6-acf8-3c381ade1bf9"><h3>প্রেস রিলিজ</h3></a>
		<p>বলাকায় বিমান ও পর্যটন মন্ত্রী
বিমানকে বিশ্বমানের এয়ারলাইন্স হিসেবে গড়ে তুলতে হবে
</p>
		<a href="/about/news?id=9bd9ae95-0a7a-47b6-9aea-e25a95c3fc91"><h3>প্রেস রিলিজ</h3></a>
		<p>ঢাকা ট্রাভলে র্মাট-২০১৮ উপলক্ষে বিমানের ২০% ছাড় !!!
বিমান ল্যয়ালটি ক্লাবের ৫০০ মাইল ফ্রি এ্যাওর্য়াড
</p>
		<a href="/about/news?id=3a2b6353-8407-47b9-ac19-784421170094"><h3>প্রেস রিলিজ</h3></a>
		<p>বিমানের ঢাকা-লন্ডন সরাসরি কার্গো পরিবহন পুনরায় শুরু
ACC3 সনদ অর্জন এবং যুক্তরাজ্য সরকারের নিষেধাজ্ঞা প্রত্যাহার
</p>
		<a href="/about/news?id=a7f1138f-22c8-4bea-ac2e-c87dad29193a"><h3>Photo</h3></a>
		<p>বিশ্ব নারী দিবসের অনুষ্ঠানের কিছু স্থিরচিত্র</p>
		<a href="/about/news?id=63e01f43-568c-410c-85b2-58dc76b2b720"><h3>ফটো ক্যাপশন</h3></a>
		<p>যথাযথ মর্যাদায় আন্তর্জাতিক নারী দিবস পালিত </p>
		<a href="/about/news?id=5bdc82ee-a9e4-454b-8c12-a19bcccd8517"><h3>Press Release</h3></a>
		<p>নিদ হাস ট্রফিতে বিসিএসএ‘র পাশে বিমান
</p>
		<a href="/about/news?id=78ac4150-e66f-4c3c-a320-805c22b985b7"><h3>প্রেস বিজ্ঞপ্তি</h3></a>
		<p>১ম বিমান বাংলাদেশ গলফ টুর্ণামেন্ট সমাপ্ত</p>
		<a href="/about/news?id=a4bb867e-255f-4be6-ab6f-b81a9869b3a1"><h3>Press Release</h3></a>
		<p>1st Biman Bangladesh Golf Tournament concludes</p>
		<a href="/about/news?id=8ca7eeeb-e457-4563-aa9a-1b3296d26023"><h3>প্রেস বিজ্ঞপ্তি</h3></a>
		<p>বিমান বাংলাদেশ গলফ টূর্ণামেন্ট ২০১৮</p>
		<a href="/about/news?id=f6af54ab-7b2d-447c-b905-b7cef6822db9"><h3>প্রেস বিজ্ঞপ্তি</h3></a>
		<p>ভ্রমণের গল্পে ডিজিটাল মাত্রা
চালু হলো বিমান হলিডেজ
</p>
		<a href="/about/news?id=dd2d2d6f-8d43-41e7-a5fb-b2fc5278d556"><h3>প্রেস বিজ্ঞপ্তি</h3></a>
		<p>বিমানের ৪৬তম প্রতিষ্ঠা বার্ষিকী উদযাপন
বহরে সংযোজিত হচ্ছে বিশ্বের অত্যাধুনিক বোয়িং ৭৮৭-৮ ড্রিমলাইনার</p>
		<a href="/about/news?id=a733d614-6a47-4f40-9a19-b3c30b43e3d3"><h3>প্রেস বিজ্ঞপ্তি</h3></a>
		<p>নতুন বছরের অবিশ্বাস্য অফারটি’র সময় আরো বৃদ্ধি পেল</p>
		<a href="/about/news?id=36cdd5ff-28bc-4292-89d7-1dc6a903f5a6"><h3>প্রেস বিজ্ঞপ্তি</h3></a>
		<p>বিশ্ব খ্রিস্টান সম্প্রদায়ের ধর্মীয় গুরু ও ভ্যাটিকান সিটির রাষ্ট্র প্রধান পোপ ফ্রান্সিসকে বহনের মাধ্যমে বিমান বাংলাদেশ এয়ারলাইন্স এক নতুন মর্যাদায় অভিষিক্ত হলো</p>
		<a href="/about/news?id=528e3a45-8493-4d63-8834-7bcf4ecd5b92"><h3>DASH 8 Q 400 PICTURE</h3></a>
		<p>DASH 8 Q 400 PICTURE</p>
		<a href="/about/news?id=d9406ba4-b094-4bcf-9aa3-bdb7dbacd695"><h3>Aircraft 737-800</h3></a>
		<p>Aircraft 737-800 Picture</p>
		<a href="/about/news?id=e2fc6858-33a9-4721-8ade-2d4eea0fdd85"><h3>Aircraft 777-300ER</h3></a>
		<p>Aircraft 777-300ER Picture</p>
	</div>
            </div>
            
            <div class="signup">
                <a href="pass_info.php"><img src="Images/signup.png" alt=""></a>
            </div>
        </div>
    </div>
</div>
    
    </div>

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
 




<script>

    var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1} 
  slides[slideIndex-1].style.display = "block"; 
  setTimeout(showSlides, 3000); 
}
    
</script>

</body>
</html>
        </div>
    <div id="dlgbox">
        <div id="dlg-header">You are not Logged In !</div>
        <div id="dlg-body">Please Login to continue</div>
        <div id="dlg-footer">
            <button onclick="document.location.href='login.php'">OK</button>
        </div>
    </div>
    
    
   
    
    <script>
    showDialog();
    function dlgLogin(){
        var whitebg=document.getElementById("white-background");
        var dlg=document.getElementById("dlgbox");
        whitebg.style.display="none";
        dlg.style.display="none";
    }
        
        
    function showDialog(){
        var whitebg=document.getElementById("white-background");
        var dlg=document.getElementById("dlgbox");
        whitebg.style.display="block";
        dlg.style.display="block";
        
        
        var winWidth=window.innerWidth;
        var winHeight=window.innerHeight;
        dlg.style.left=(winWidth/2)-480/2+"px";
        dlg.style.top="150px";
        
    }
    </script>
</body>
</html>