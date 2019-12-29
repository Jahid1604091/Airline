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
   <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">
    <title>Enter Passenger Information </title>
    <link rel="shortcut icon" href="Images/favicon.ico" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/flightSection.css">
    <link rel="stylesheet" href="css/ConfirmFlight.css"> 
    <link rel="stylesheet" href="css/pass_info.css">
    
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
     <form action="pass_info2.php" method="post">
     
     <h2 class="p-3">Enter Passenger Information</h2>
     <div class="outer">
    <br>
         <div class="row">
             <div class="col-md-3">
                <br>
                 <label for="" class="title">Title</label>
            <select name="title" id="" required>
                <option >Mr</option>
                <option >Mrs</option>
                <option >Ms</option>
            </select>
                 
             </div>
             <div class="col-md-3">
                 <p>First Name</p>
                 <input type="text" name="fname" placeholder="" required>
             </div>
             
             <div class="col-md-3">
                 <p>Last Name</p>
                 <input type="text" name="lname" placeholder="" required>
             </div>
             
             <div class="col-md-3">
                 <p>Date of Birth</p>
                 <select name="date" id="">
                     <option>--</option>
							        <?php
										
										
										for($i=1; $i<=31; $i++) {
										   
										    echo "<option>" . $i . "</option>";
										   
										}
									?>
                 </select> 
                    
                    <select name="mnth" id="">
                     <option>--</option>
				<option value="1">Jan</option>
				<option value="2">Feb</option>
				<option value="3">Mar</option>
				<option value="4">Apr</option>
				<option value="5">May</option>
				<option value="6">Jun</option>
				<option value="7">Jul</option>
				<option value="8">Aug</option>
				<option value="9">Sep</option>
				<option value="10">Oct</option>
				<option value="11">Nov</option>
				<option value="12">Dec</option>	       
                 </select> 
                    
                    <select name="yr" id="">
                     <option>--</option>
							        <?php
										
										
										for($i=1919; $i<=2019; $i++) {
										   
										    echo "<option>" . $i . "</option>";
										   
										}
									?>
                 </select>
             </div>
         </div>
         
         
         <div class="abc">
         <label for="" class="">Biman Loyalti Club Member#</label>
         <input type="text" name="club" placeholder="" class="ml-1">
         <br>
         <label for="" class="">Mobile Phone#</label>
        <select name="PX[0].PH[0].countryCode" class="cc">
        <option value="">&lt; Please Select &gt;</option>
        <optgroup label="----------------------">
            <option value="880">BANGLADESH (+880)</option>
            <option value="673">BRUNEI (+673)</option>
            <option value="359">BULGARIA (+359)</option>
            <option value="86">CHINA (+86)</option>
            <option value="20">EGYPT (+20)</option>
            <option value="33">FRANCE (+33)</option>
            <option value="49">GERMANY (+49)</option>
            <option value="852">HONG KONG (+852)</option>
            <option value="36">HUNGARY (+36)</option>
            <option value="354">ICELAND (+354)</option>
            <option value="91">INDIA (+91)</option>
            <option value="39">ITALY (+39)</option>
            <option value="81">JAPAN (+81)</option>
            <option value="965">KUWAIT (+965)</option>
            <option value="60">MALAYSIA (+60)</option>
            <option value="356">MALTA (+356)</option>
            <option value="976">MONGOLIA (+976)</option>
            <option value="212">MOROCCO (+212)</option>
            <option value="95">MYANMAR (+95)</option>
            <option value="977">NEPAL (+977)</option>
            <option value="31">NETHERLANDS (+31)</option>
            <option value="968">OMAN (+968)</option>
            <option value="48">POLAND (+48)</option>
            <option value="974">QATAR (+974)</option>
            <option value="966">SAUDI ARABIA (+966)</option>
            <option value="65">SINGAPORE (+65)</option>
            <option value="992">TAJIKISTAN (+992)</option>
            <option value="66">THAILAND (+66)</option>
            <option value="971">UNITED ARAB EMIRATES (+971)</option>
            <option value="44">UNITED KINGDOM (+44)</option>
            <option value="1">UNITED STATES (+1)</option>
            <option value="998">UZBEKISTAN (+998)</option>
        </optgroup>
        <optgroup label="----------------------">
            <option value="93">AFGHANISTAN (+93)</option>
            <option value="355">ALBANIA (+355)</option>
            <option value="213">ALGERIA (+213)</option>
            <option value="1">AMERICAN SAMOA (+1)</option>
            <option value="376">ANDORRA (+376)</option>
            <option value="244">ANGOLA (+244)</option>
            <option value="1">ANGUILLA (+1)</option>
            <option value="672">ANTARCTICA (+672)</option>
            <option value="1">ANTIGUA AND BARBUDA (+1)</option>
            <option value="54">ARGENTINA (+54)</option>
            <option value="374">ARMENIA (+374)</option>
            <option value="297">ARUBA (+297)</option>
            <option value="61">AUSTRALIA (+61)</option>
            <option value="43">AUSTRIA (+43)</option>
            <option value="994">AZERBAIJAN (+994)</option>
            <option value="1">BAHAMAS (+1)</option>
            <option value="973">BAHRAIN (+973)</option>
            <option value="880">BANGLADESH (+880)</option>
            <option value="1">BARBADOS (+1)</option>
            <option value="375">BELARUS (+375)</option>
            <option value="32">BELGIUM (+32)</option>
            <option value="501">BELIZE (+501)</option>
            <option value="229">BENIN (+229)</option>
            <option value="1">BERMUDA (+1)</option>
            <option value="975">BHUTAN (+975)</option>
            <option value="591">BOLIVIA (+591)</option>
            <option value="387">BOSNIA AND HERZEGOVINA (+387)</option>
            <option value="267">BOTSWANA (+267)</option>
            <option value="47">BOUVET ISLAND (+47)</option>
            <option value="55">BRAZIL (+55)</option>
            <option value="284">BRITISH INDIAN OCEAN TERRITORY (+284)</option>
            <option value="673">BRUNEI (+673)</option>
            <option value="359">BULGARIA (+359)</option>
            <option value="226">BURKINA FASO (+226)</option>
            <option value="257">BURUNDI (+257)</option>
            <option value="855">CAMBODIA (+855)</option>
            <option value="237">CAMEROON (+237)</option>
            <option value="1">CANADA (+1)</option>
            <option value="238">CAPE VERDE (+238)</option>
            <option value="1">CAYMAN ISLANDS (+1)</option>
            <option value="236">CENTRAL AFRICAN REPUBLIC (+236)</option>
            <option value="235">CHAD (+235)</option>
            <option value="56">CHILE (+56)</option>
            <option value="86">CHINA (+86)</option>
            <option value="53">CHRISTMAS ISLAND (+53)</option>
            <option value="61">COCOS (KEELING) ISLANDS (+61)</option>
            <option value="57">COLOMBIA (+57)</option>
            <option value="269">COMOROS (+269)</option>
            <option value="242">CONGO (+242)</option>
            <option value="243">CONGO, THE DEM. REP. OF THE (+243)</option>
            <option value="682">COOK ISLANDS (+682)</option>
            <option value="506">COSTA RICA (+506)</option>
            <option value="225">COTE D'IVOIRE (+225)</option>
            <option value="385">CROATIA (+385)</option>
            <option value="53">CUBA (+53)</option>
            <option value="357">CYPRUS (+357)</option>
            <option value="420">CZECH REPUBLIC (+420)</option>
            <option value="45">DENMARK (+45)</option>
            <option value="253">DJIBOUTI (+253)</option>
            <option value="1">DOMINICA (+1)</option>
            <option value="1">DOMINICAN REPUBLIC (+1)</option>
            <option value="593">ECUADOR (+593)</option>
            <option value="20">EGYPT (+20)</option>
            <option value="503">EL SALVADOR (+503)</option>
            <option value="240">EQUATORIAL GUINEA (+240)</option>
            <option value="291">ERITREA (+291)</option>
            <option value="372">ESTONIA (+372)</option>
            <option value="251">ETHIOPIA (+251)</option>
            <option value="500">FALKLAND ISLANDS (MALVINAS) (+500)</option>
            <option value="298">FAROE ISLANDS (+298)</option>
            <option value="679">FIJI (+679)</option>
            <option value="358">FINLAND (+358)</option>
            <option value="33">FRANCE (+33)</option>
            <option value="594">FRENCH GUIANA (+594)</option>
            <option value="689">FRENCH POLYNESIA (+689)</option>
            <option value="596">FRENCH SOUTHERN TERRITORIES (+596)</option>
            <option value="241">GABON (+241)</option>
            <option value="220">GAMBIA (+220)</option>
            <option value="995">GEORGIA (+995)</option>
            <option value="49">GERMANY (+49)</option>
            <option value="233">GHANA (+233)</option>
            <option value="350">GIBRALTAR (+350)</option>
            <option value="30">GREECE (+30)</option>
            <option value="299">GREENLAND (+299)</option>
            <option value="1">GRENADA (+1)</option>
            <option value="590">GUADELOUPE (+590)</option>
            <option value="1">GUAM (+1)</option>
            <option value="502">GUATEMALA (+502)</option>
            <option value="224">GUINEA (+224)</option>
            <option value="245">GUINEA-BISSAU (+245)</option>
            <option value="592">GUYANA (+592)</option>
            <option value="509">HAITI (+509)</option>
            <option value="61">HEARD ISLAND &amp; MCDONALD ISLANDS (+61)</option>
            <option value="379">HOLY SEE (VATICAN CITY STATE) (+379)</option>
            <option value="504">HONDURAS (+504)</option>
            <option value="852">HONG KONG (+852)</option>
            <option value="36">HUNGARY (+36)</option>
            <option value="354">ICELAND (+354)</option>
            <option value="91">INDIA (+91)</option>
            <option value="62">INDONESIA (+62)</option>
            <option value="98">IRAN (+98)</option>
            <option value="964">IRAQ (+964)</option>
            <option value="353">IRELAND (+353)</option>
            <option value="972">ISRAEL (+972)</option>
            <option value="39">ITALY (+39)</option>
            <option value="1">JAMAICA (+1)</option>
            <option value="81">JAPAN (+81)</option>
            <option value="962">JORDAN (+962)</option>
            <option value="7">KAZAKHSTAN (+7)</option>
            <option value="254">KENYA (+254)</option>
            <option value="686">KIRIBATI (+686)</option>
            <option value="850">KOREA, DEM. PEOPLE'S REPUBLIC OF (+850)</option>
            <option value="82">KOREA, REPUBLIC OF (+82)</option>
            <option value="965">KUWAIT (+965)</option>
            <option value="996">KYRGYZSTAN (+996)</option>
            <option value="856">LAOS (+856)</option>
            <option value="371">LATVIA (+371)</option>
            <option value="961">LEBANON (+961)</option>
            <option value="266">LESOTHO (+266)</option>
            <option value="231">LIBERIA (+231)</option>
            <option value="218">LIBYAN ARAB JAMAHIRIYA (+218)</option>
            <option value="423">LIECHTENSTEIN (+423)</option>
            <option value="370">LITHUANIA (+370)</option>
            <option value="352">LUXEMBOURG (+352)</option>
            <option value="853">MACAO (+853)</option>
            <option value="389">MACEDONIA (+389)</option>
            <option value="261">MADAGASCAR (+261)</option>
            <option value="265">MALAWI (+265)</option>
            <option value="60">MALAYSIA (+60)</option>
            <option value="960">MALDIVES (+960)</option>
            <option value="223">MALI (+223)</option>
            <option value="356">MALTA (+356)</option>
            <option value="692">MARSHALL ISLANDS (+692)</option>
            <option value="596">MARTINIQUE (+596)</option>
            <option value="222">MAURITANIA (+222)</option>
            <option value="230">MAURITIUS (+230)</option>
            <option value="269">MAYOTTE (+269)</option>
            <option value="52">MEXICO (+52)</option>
            <option value="691">MICRONESIA, FEDERATED STATES OF (+691)</option>
            <option value="373">MOLDOVA, REPUBLIC OF (+373)</option>
            <option value="377">MONACO (+377)</option>
            <option value="976">MONGOLIA (+976)</option>
            <option value="382">MONTENEGRO (+382)</option>
            <option value="1">MONTSERRAT (+1)</option>
            <option value="212">MOROCCO (+212)</option>
            <option value="258">MOZAMBIQUE (+258)</option>
            <option value="95">MYANMAR (+95)</option>
            <option value="264">NAMIBIA (+264)</option>
            <option value="674">NAURU (+674)</option>
            <option value="977">NEPAL (+977)</option>
            <option value="31">NETHERLANDS (+31)</option>
            <option value="599">NETHERLANDS ANTILLES (+599)</option>
            <option value="687">NEW CALEDONIA (+687)</option>
            <option value="64">NEW ZEALAND (+64)</option>
            <option value="505">NICARAGUA (+505)</option>
            <option value="227">NIGER (+227)</option>
            <option value="234">NIGERIA (+234)</option>
            <option value="683">NIUE (+683)</option>
            <option value="672">NORFOLK ISLAND (+672)</option>
            <option value="670">NORTHERN MARIANA ISLANDS (+670)</option>
            <option value="47">NORWAY (+47)</option>
            <option value="968">OMAN (+968)</option>
            <option value="92">PAKISTAN (+92)</option>
            <option value="680">PALAU (+680)</option>
            <option value="972">PALESTINE (+972)</option>
            <option value="507">PANAMA (+507)</option>
            <option value="675">PAPUA NEW GUINEA (+675)</option>
            <option value="595">PARAGUAY (+595)</option>
            <option value="51">PERU (+51)</option>
            <option value="63">PHILIPPINES (+63)</option>
            <option value="1">PITCAIRN (+1)</option>
            <option value="48">POLAND (+48)</option>
            <option value="351">PORTUGAL (+351)</option>
            <option value="1">PUERTO RICO (+1)</option>
            <option value="974">QATAR (+974)</option>
            <option value="262">REUNION (+262)</option>
            <option value="40">ROMANIA (+40)</option>
            <option value="7">RUSSIA (+7)</option>
            <option value="250">RWANDA (+250)</option>
            <option value="290">SAINT HELENA (+290)</option>
            <option value="869">SAINT KITTS AND NEVIS (+869)</option>
            <option value="758">SAINT LUCIA (+758)</option>
            <option value="508">SAINT PIERRE AND MIQUELON (+508)</option>
            <option value="784">SAINT VINCENT AND THE GRENADINES (+784)</option>
            <option value="685">SAMOA (+685)</option>
            <option value="378">SAN MARINO (+378)</option>
            <option value="239">SAO TOME AND PRINCIPE (+239)</option>
            <option value="966">SAUDI ARABIA (+966)</option>
            <option value="221">SENEGAL (+221)</option>
            <option value="381">SERBIA (+381)</option>
            <option value="248">SEYCHELLES (+248)</option>
            <option value="232">SIERRA LEONE (+232)</option>
            <option value="65">SINGAPORE (+65)</option>
            <option value="421">SLOVAKIA (+421)</option>
            <option value="386">SLOVENIA (+386)</option>
            <option value="677">SOLOMON ISLANDS (+677)</option>
            <option value="252">SOMALIA (+252)</option>
            <option value="27">SOUTH AFRICA (+27)</option>
            <option value="995">SOUTH GEORGIA &amp; SOUTH SANDWICH ISLANDS (+995)</option>
            <option value="34">SPAIN (+34)</option>
            <option value="94">SRI LANKA (+94)</option>
            <option value="249">SUDAN (+249)</option>
            <option value="597">SURINAME (+597)</option>
            <option value="47">SVALBARD AND JAN MAYEN (+47)</option>
            <option value="268">SWAZILAND (+268)</option>
            <option value="46">SWEDEN (+46)</option>
            <option value="41">SWITZERLAND (+41)</option>
            <option value="963">SYRIA (+963)</option>
            <option value="886">TAIWAN (+886)</option>
            <option value="992">TAJIKISTAN (+992)</option>
            <option value="255">TANZANIA, UNITED REPUBLIC OF (+255)</option>
            <option value="66">THAILAND (+66)</option>
            <option value="670">TIMOR-LESTE (+670)</option>
            <option value="228">TOGO (+228)</option>
            <option value="690">TOKELAU (+690)</option>
            <option value="676">TONGA (+676)</option>
            <option value="868">TRINIDAD AND TOBAGO (+868)</option>
            <option value="216">TUNISIA (+216)</option>
            <option value="90">TURKEY (+90)</option>
            <option value="993">TURKMENISTAN (+993)</option>
            <option value="1">TURKS AND CAICOS ISLANDS (+1)</option>
            <option value="688">TUVALU (+688)</option>
            <option value="256">UGANDA (+256)</option>
            <option value="380">UKRAINE (+380)</option>
            <option value="971">UNITED ARAB EMIRATES (+971)</option>
            <option value="44">UNITED KINGDOM (+44)</option>
            <option value="1">UNITED STATES (+1)</option>
            <option value="1">UNITED STATES MINOR OUTLYING ISLANDS (+1)</option>
            <option value="598">URUGUAY (+598)</option>
            <option value="998">UZBEKISTAN (+998)</option>
            <option value="678">VANUATU (+678)</option>
            <option value="58">VENEZUELA (+58)</option>
            <option value="84">VIETNAM (+84)</option>
            <option value="284">VIRGIN ISLANDS, BRITISH (+284)</option>
            <option value="1">VIRGIN ISLANDS, U.S. (+1)</option>
            <option value="681">WALLIS AND FUTUNA (+681)</option>
            <option value="212">WESTERN SAHARA (+212)</option>
            <option value="967">YEMEN (+967)</option>
            <option value="260">ZAMBIA (+260)</option>
            <option value="263">ZIMBABWE (+263)</option>
        </optgroup>
    </select>
         <input type="text" name="phn" placeholder="" class="" required>
         <br>
         <label for="" class="">Email Address#</label>
         <input type="email" name="email" placeholder="" class="eml" required>
         <br>
         <input type="checkbox" class=""><label for="">Notify me of flight time changes via</label>
         <select name="notify" id="">
             <option value="">Please Select</option>
             <option value="">Mobile SMS</option>
             <option value="">E-mail</option>
             <option value="">Both</option>
         </select>
         
         </div>
         
         <button type="submit" class="btn-1">Sign Up </button>
           
      <!--  <input type="button" class="btn-back" onclick="history.go(-1);" value=" Start a new Search">  -->
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
    </div>
    
    <div id="dlgbox">
        <div id="dlg-header">Informations already Exists !</div>
        <div id="dlg-body">Please Enter New Information to continue</div>
        <div id="dlg-footer">
            <button onclick="document.location.href='pass_info.php'">OK</button>
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