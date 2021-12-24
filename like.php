<?php
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
  die("connection to this database failed due to". 
  mysqli_connect_error());
}
//echo "success connecting to db";
$name = $_POST['name'];
$email= $_POST['email'];
$message = $_POST['message']; 
$sql = "INSERT INTO `trip`.`trip` (`name`, `email`, `message`, `dt`) VALUES ('$name', '$email', '$message', current_timestamp())";

if($con->query($sql) == true){
    echo "successfully inserted";
}
else{
    echo"ERROR: $Sql <br> $con->error";
}

$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin: left 43px;margin-top:43px;">

  
</head>

    
<body id="myPage">

    <!-- Sidebar on click -->
    <nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
      <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
        <i class="fa fa-remove"></i>
      </a>
      <a href="#" class="w3-bar-item w3-button">Link 1</a>
      <a href="#" class="w3-bar-item w3-button">Link 2</a>
      <a href="#" class="w3-bar-item w3-button">Link 3</a>
      <a href="#" class="w3-bar-item w3-button">Link 4</a>
      <a href="#" class="w3-bar-item w3-button">Link 5</a>
    </nav>
    
    <!-- Navbar -->
    <div class="w3-top">
     <div class="w3-bar w3-theme-d2 w3-left-align">
      <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
      <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>
      <a href="https://www.youtube.com/watch?v=MEg-vYTsEVc" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Home Care</a>
      <a href="https://mentalhealth101.org/training/?gclid=CjwKCAiA1aiMBhAUEiwACw25MTwC-OlxQCvtpednKa4KEoTgd_32WXTZz34_-Ey6xdMD9zbgJEd0zhoC6HcQAvD_BwE" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Mental Health</a>
      <a href="http://localhost/presentation/razor/pay.php?checkout=manual" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Help Humanity</a>
      <a href="tel:101" class="w3-bar-item w3-button w3-hide-small w3-hover-white">SOS</a>
        <div class="w3-dropdown-hover w3-hide-small">
        <button class="w3-button" title="Notifications">Dropdown <i class="fa fa-caret-down"></i></button>     
        <div class="w3-dropdown-content w3-card-4 w3-bar-block">
          <a href="#" class="w3-bar-item w3-button">OPD</a>
          <a href="#" class="w3-bar-item w3-button">CONSULTATION</a>
          <a href="#" class="w3-bar-item w3-button">Pharmacy</a>
        </div>
      </div>
      <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
     </div>
    
      <!-- Navbar on small screens http://localhost/presentation/razor/pay.php?checkout=manual-->
      <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
        <a href="https://www.youtube.com/watch?v=MEg-vYTsEVc" class="w3-bar-item w3-button">Home Care</a>
        <a href="https://mentalhealth101.org/training/?gclid=CjwKCAiA1aiMBhAUEiwACw25MTwC-OlxQCvtpednKa4KEoTgd_32WXTZz34_-Ey6xdMD9zbgJEd0zhoC6HcQAvD_BwE" class="w3-bar-item w3-button">Menatl Health</a>
        <a href=" http://localhost/presentation/razor/pay.php?checkout=manual" class="w3-bar-item w3-button">Help Humanity</a>
        <a href="tel:101" class="w3-bar-item w3-button">SOS</a>
        <a href="#" class="w3-bar-item w3-button">Search</a>
      </div>
    </div>
    <div class="w3-row-padding w3-margin-bottom">
        <div class="w3-quarter">
          <div class="w3-container w3-red w3-padding-16">
            <div class="w3-left"><i class="fa fa-whatsapp w3-xxxlarge"></i></div>
            <div class="w3-right">
              <h3>Helpline Numbers</h3>
            </div>
            <div class="w3-clear"></div>
            <a href="https://api.whatsapp.com/send/?phone=919013151515&text=Hi&app_absent=0" class="w3-bar-item w3-button"><h2>9013151515</h2></a>
          </div>
        </div>
        <div class="w3-quarter">
          <div class="w3-container w3-blue w3-padding-16" width="20px;">
            <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
            <div class="w3-right">
              <h3>Mental Health</h3>
            </div>
            <div class="w3-clear"></div>
            <a href="tel:08046110007" class="w3-bar-item w3-button"><h2>08046110007</h2></a>
          </div>
        </div>
        <div class="w3-quarter">
          <div class="w3-container w3-teal w3-padding-16">
            <div class="w3-left"><i class="fa fa-child w3-xxxlarge"></i></div>
            <div class="w3-right">
              <h3>Child</h3>
            </div>
            <div class="w3-clear"></div>
            <a href="tel:1098" class="w3-bar-item w3-button"><h2>1098</h2></a>
          </div>
        </div>
        <div class="w3-quarter">
          <div class="w3-container w3-orange w3-text-white w3-padding-16">
            <div class="w3-left"><i class="fa fa-user w3-xxxlarge"></i></div>
            <div class="w3-right">
              <h3>Senior Citizens</h3>
            </div>
            <div class="w3-clear"></div>
            <a href="tel:14567" class="w3-bar-item w3-button"><h2>14567</h2></a>
          </div>
        </div>
    
      </div>
      <div class="w3-container">
          <div class="w3-container w3-teal w3-padding-16">
           <div class="w3-left"class="s3-bar-item w3-button" style="border: 3px solid black;"> <h2>Vaccination<br>Registration</h2></div>
          <div class="w3-left"style="padding: 30px;"><img src="/presentation/arg.html.png" width="300px" height="100px" >
        <img src="/presentation/co.html.jpg" width="300px" height="100px"></div>
           <div class="w3-right" style="border: 2px solid black;">
               <a href="https://www.cowin.gov.in/" class="s3-bar-item w3-button"><h1><b>Get Your</b></h1>
               <h2>Vaccination certificate</h2></a>
           </div> 
          </div>
          
             
              <div class="w3-row-padding w3-center w3-padding-16" id="pricing">
                <div class="w3-third w3-margin-bottom">
                  <ul class="w3-ul w3-border w3-hover-shadow">
                    <li class="w3-theme">
                      <p class="w3-xlarge">VACCINATION DOSE STATUS</p>
                    </li>
                    <li class="w3-padding-16"><b> DOSES DAY BEFORE</b></li>
                    <li class="w3-padding-16"><b>90,27,638</b></li>
                    <li class="w3-padding-16"><b>TOTAL VACCINATION DOSES</b></li>
                    <li class="w3-padding-16"><b>1,19,38,44,741</b></li>
                   
                </div>
            
                <div class="w3-third w3-margin-bottom">
                  <ul class="w3-ul w3-border w3-hover-shadow">
                    <li class="w3-theme-l2">
                      <p class="w3-xlarge">
                        TESTING STATUS UP TO NOV 24, 2021</p>
                    </li>
                    <li class="w3-padding-16"><b>SAMPLES TESTED ON NOV 24, 2021</b></li>
                    <li class="w3-padding-16"><b>11,50,538</b></li>
                    <li class="w3-padding-16"><b>TOTAL SAMPLES TESTED</b></li>
                    <li class="w3-padding-16"><b>1,59,24,763</b></li>
                   
                </div>
            
                <div class="w3-third w3-margin-bottom">
                  <ul class="w3-ul w3-border w3-hover-shadow">
                    <li class="w3-theme">
                      <p class="w3-xlarge">CASES ACROSS INDIA</p>
                    </li>
                    <li class="w3-padding-16"><b>ACTIVE CASES (0.32%)</b></li>
                    <li class="w3-padding-16"><b>1,09,940(1,541^) </b></li>
                    <li class="w3-padding-16"><b>DEATHS(1.35%) </b></li>
                    <li class="w3-padding-16"><b>4,66,980(396^) </b></li>
                   
                </div>
            </div>
              
        
          <img src="/presentation/sym.png" >
             

 
    <!-- Work Row https://covid.giveindia.org/?utm_source=google&utm_medium=cpc&utm_campaign=SB_GI_Corona_Relief_Fund_Generic_India_April2021&utm_adgroup=123233550202&utm_term=donate%20coronavirus&utm_matchtype=b&utm_device=c&gclid=CjwKCAiA1aiMBhAUEiwACw25Mazpppsp8uGRnIdOEWS3qLGpsQKNCad3trlrLU-ShqEoFQ-tyYIQKBoC1BQQAvD_BwE-->
    <div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">
    
    <div class="w3-quarter">
    <h2>AWARENESS OF COVID-19</h2>
    <p>washing your hands frequently (for at least 20 seconds) with soap and water or a hand sanitizer that contains at least 60% alcohol.
      avoiding touching your face (particularly your eyes, nose, and mouth).<br>
      staying home as much as possible, even if you don’t feel sick.<br>
      avoiding crowds and gatherings of 10 or more people.<br>
      avoiding all non-essential shopping and travel.<br>
      keeping 6 feet of distance between yourself and others when out.<br>
      getting plenty of sleep, which helps support your immune system.<br>
      following all recommendations from health authorities.</p>
    </div>
    
    <embed style="width:920px;  height:550px;" src="https://www.youtube.com/embed/ykZJ-jcE-Do"></div></embed>
    
    </div>
    
    <!-- Container -->
    <div class="w3-container" style="position:relative">
      <a onclick="w3_open()" class="w3-button w3-xlarge w3-circle w3-teal"
      style="position:absolute;top:-28px;right:24px">+</a>
    </div>
    
    <!-- Pricing Row -->
    <div class="w3-row-padding w3-center w3-padding-64" id="pricing">
        <h2>vaccination</h2>
        <p></p><br>
        <div class="w3-third w3-margin-bottom">
          <ul class="w3-ul w3-border w3-hover-shadow">
            <li class="w3-theme">
              <p class="w3-xlarge">Pm Take Vaccine</p>
            </li>
           <embed style="width: 400px; height: 400px;" src="https://www.youtube.com/embed/kXANPk6nUGk"></embed>
          </ul>
        </div>
    
        <div class="w3-third w3-margin-bottom">
          <ul class="w3-ul w3-border w3-hover-shadow">
            <li class="w3-theme-l2">
              <p class="w3-xlarge">How To Book Vaccine</p>
            </li>
           <embed style="width: 400px; height: 400px;" src="https://www.youtube.com/embed/io-oreIAuTM"></embed>
          </ul>
        </div>
    
        <div class="w3-third w3-margin-bottom">
          <ul class="w3-ul w3-border w3-hover-shadow">
            <li class="w3-theme">
              <p class="w3-xlarge">Symptoms of covid-19</p>
            </li>
            <embed style="width: 400px; height: 400px;" src="https://www.youtube.com/embed/U8r3oTVMtQ0"></embed>
          </ul>
        </div>
    </div>
   
    <!-- Contact Container -->
    <div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
      <div class="w3-row">
        <div class="w3-col m5">
        <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
          <h3>Address</h3>
          <p>Somewhere in india.</p>
          <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  India</p>
          <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +91 9865321740</p>
          <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  test@gmail.com</p>
        </div>
        <div class="w3-col m7">
          <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="like.php" method="POST" >
          <div class="w3-section">      
            <label>Name</label>
            <input class="w3-input" type="text" name="name"  id="name" required>
          </div>
          <div class="w3-section">      
            <label>Email</label>
            <input class="w3-input" type="email" name="email" id="email" required>
          </div>
          <div class="w3-section">      
            <label>Message</label>
            <input class="w3-input" type="text" name="message" id="message" required>
          </div>  
          <input class="w3-check" type="checkbox" checked name="Like">
          <label>I Like it!</label>
          <button type="submit" class="w3-button w3-right w3-theme">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
     <!-- our team container -->
<div class="w3-container w3-padding-64 w3-center" id="">
    <h2>OUR TEAM</h2>
    <p>Meet The Team </p>
    
    <div class="w3-row"><br>
    
    <div class="w3-quarter">
      <img src="/presentation/T1.html.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
      <h3>Sachin </h3>
      <p>Backend Developer</p>
    </div>
    
    <div class="w3-quarter">
     <img src="/presentation/t2.html.jpg" alt="Boss" style="width: 45%" class="w3-circle w3-hover-opacity">
      <h3>Lakshya</h3>
      <p>Web Designer</p>
    </div>
    
    <div class="w3-quarter">
      <img src="/presentation/t3.png.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
      <h3>Priyanshu</h3>
      <p>Front End Developer</p>
    </div>
    
    
                        
    </div>
    </div>
     <h4>Follow Us</h4>
    <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
    <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
    <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
    <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
    <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
    <p>Powered by <a href="#home;" target="_blank">Helping Hands.com</a></p>
  
    <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
      <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
      <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
      <i class="fa fa-chevron-circle-up"></i></span></a>
    </div>
  </footer>
  
  <script>
  // Script for side navigation
  function w3_open() {
    var x = document.getElementById("mySidebar");
    x.style.width = "300px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
  }
  
  // Close side navigation
  function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
  }
  
  // Used to toggle the menu on smaller screens when clicking on the menu button
  function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else { 
      x.className = x.className.replace(" w3-show", "");
    }
  }
  </script>
</body>
</html>
