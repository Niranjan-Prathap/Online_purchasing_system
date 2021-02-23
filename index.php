<?php
session_start();
?>
<html>
    <title>Home - NNN MOBILES</title>
    <link rel = "icon" href ="logo hd.png" type = "image/x-icon"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3.css">
    <link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed:600&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Lemonada&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
     <script src='https://kit.fontawesome.com/a076d05399.js'></script>
     <link href="hover.css" rel="stylesheet" media="all">
    <head>
        <style>
                html {
                  scroll-behavior: smooth;
                }

        </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover.css"/>
    </head>
    <!-- AOS
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>-->
    
   <link href="aos.css" rel="stylesheet">
    <script src="aos.js"></script>
    <?php include('header.php'); ?>
    <!--<title>NNN MOBILES - HOME</title>
    
    <body>
        <link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed:600&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Lemonada&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    

          <!---------------------------------------------header-----------------------------------------------|||->  
            <div class="w3-container w3-blue w3-mobile">
                <h1 style="font-family: 'Fredoka One', cursive;font-size: 50px; color:yellow;"><img src="/images/wlogo hd.png" style="width:7.5%;left:10px;top:20px" class="w3-display-topleft w3-round"><center>NNN - MOBILES</center> 
                  <!--<p><img src="/images/logo.png" style="width:15%" class="w3-round w3-topleft">JB - MOBILES</p>-> 
                </h1> 
            </div>
            <!--------------------------------------------------------------------------------------------------|||->
            <div class="w3-bar w3-blue  w3-padding w3-animate-right w3-mobile">
                <form method="POST" action="http://nnnmobiles.000webhostapp.com/sresult.php">
                <a href="#mobiles" class="w3-bar-item w3-button w3-mobile w3-hover-none w3-border-blue w3-bottombar w3-hover-border-yellow w3-hover-text-white" style="font-family: 'Fredoka One';font-size: 16">Mobiles
                </a>
                <a href="#accessories" class="w3-bar-item w3-button w3-mobile w3-hover-none w3-border-blue w3-bottombar w3-hover-border-yellow w3-hover-text-white" style="font-family: 'Fredoka One';font-size: 16">Accessories
                </a>
                
                <!--<input type="text" class="w3-bar-item w3-input w3-white  w3-round-xxlarge w3-padding-16 " placeholder="What are you looking for...">-->
               <!--<form method="POST" action="http://nnnmobiles.000webhostapp.com/sresult.php">-> 
                <input class="w3-input w3-bar-item w3-border w3-round w3-mobile " name="search" type="text" placeholder="What are you looking for...?" style="width:60%;position:relative; left:12.5px;font-family: 'Titillium Web';" required>
                
                <!--<input class=" w3-btn w3-bar-item w3-yellow w3-round w3-mobile  w3-hover-blue" style="font-family:'Architects Daughter';position:relative;font-size:16px;width:7.5%;" name="submit" value="Search">->
                    <input type="submit" value="Search" class="w3-btn w3-bar-item w3-yellow w3-mobile w3-text-blue w3-round w3-padding" style="position:relative;left:12.5px;font-family: 'Fredoka One';font-size: 16" name="submit">
                <!--</form>->
                
                     <!--<div class="w3-dropdown-hover w3-blue">
                        <button class="w3-button w3-blue">Session id</button>
                        <div class="w3-dropdown-content w3-bar-block w3-card-4">
                            <a href="#" class="w3-bar-item w3-button w3-hover-yellow">Logout</a>
                        </div>
                    </div>-->
                
                <!--<a href="https://nnnmobiles.000webhostapp.com/sresult.php?" target="_blank" class="w3-bar-item w3-button w3-mobile w3-border-Blue w3-round w3-yellow w3-hover-blue w3-padding" style="font-family: 'Architects Daughter';font-size: 16;position:relative;left:10px" name="search">Search
                </a>->
                <?php // if(isset($_SESSION['id'])) { ?>
                <a href="https://nnnmobiles.000webhostapp.com/users/customer/logout.php?" target="_blank" class=" w3-padding w3-right w3-bar-item w3-button w3-mobile w3-hover-none w3-border-blue w3-bottombar w3-hover-border-yellow w3-hover-text-white" style="font-family: 'Fredoka One';font-size: 16";>Logout
                </a>
                <?php // } else{ ?> 
                <a href="https://nnnmobiles.000webhostapp.com/users/customer/?" target="_blank" class=" w3-padding w3-right w3-bar-item w3-button w3-mobile w3-hover-none w3-border-blue w3-bottombar w3-hover-border-yellow w3-hover-text-white" style="font-family: 'Fredoka One';font-size: 16";>Sign in  
                </a>
                <?php // } ?>
                </form>
                </div>-->
            <!-----------------------------------------slideshow------------------------------------------------|||-->
            <div class="w3-container w3-display-container  w3-blue  w3-padding w3-mobile" style="width:100%">
              <img class="mySlides w3-animate-opacity w3-mobile" src="images\banner1.png" style="width:100%;height:50%">
              <img class="mySlides w3-animate-opacity w3-mobile" src="images\banner2.png" style="width:100%; height:50%">
              <img class="mySlides w3-animate-opacity w3-mobile" src="images\banner0.png" style="width:100%;height:50%">
            
              <button class="w3-button w3-blue w3-hover-yellow w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
              <button class="w3-button w3-blue w3-hover-yellow w3-display-right" onclick="plusDivs(1)">&#10095;</button>
            </div>
            <script>
            var slideIndex = 1;
            showDivs(slideIndex);
            
            function plusDivs(n) {
              showDivs(slideIndex += n);
            }
            
            function showDivs(n) {
              var i;
              var x = document.getElementsByClassName("mySlides");
              if (n > x.length) {slideIndex = 1}
              if (n < 1) {slideIndex = x.length}
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
              }
              x[slideIndex-1].style.display = "block";  
            }
            </script>
            <!---------------------------------------------marquee----------------------------------------------|||-->
            <div class="w3-container w3-bottom w3-blue w3-mobile">
            <marquee scrollamount="12" direction="left" style="color:yellow; font-family: 'Lemonada', cursive;" onmouseover="this.stop();"onmouseout="this.start();">
                Unga favourite mobile &#128241; vaanga namma NNN MOBILES vaanga &#128591; - All your mobile needs in one place. Contact: &#128222; 0435-2472126,  &#9993; nnnmobilesoffl@gmail.com, &#127968; No:007,Vivekanandar cross street,Kumbakonam -612001. Thank you vist again &#128522;&#128522;&#128522; <i class='far fa-copyright'><span style="font-family: 'Lemonada';"> NNN - MOBILES, All Rights Reserved - 2020.</span></i>
            </marquee>
            </div>
            <!--------------------------------------------Mobiles-----------------------------------------------|||-->
            <div class="w3-container w3-blue  w3-mobile" style="width:auto"id="mobiles">
                 <h2 data-aos="fade-right" style="font-family: 'Fredoka One';" class="w3-blue w3-padding">Mobiles</h2>
                 
                <div class="w3-row w3-padding w3-blue w3-mobile">
                        
                     
                     <div data-aos="fade-left" class="w3-card w3-cell w3-padding w3-mobile w3-white" style="width:25%">
                        <form action="isresult.php" method="POST">
                            <img src="images/iphone/apple-iphone-11-pro.jpg" alt="Person" style="width:100%">
                            <div class="w3-container">
                              <h4><b><input type=submit class="w3-btn w3-white" value="Apple" name="name" style="width:50%"></b></h4>
                               <input type="hidden" value="mobile" name ="catg">
                              <p><center>For real flagship experience</center></p>
                            </div>
                        </form>
                      </div>
                    
                      <div data-aos="fade-left" class="w3-card w3-cell w3-padding w3-mobile w3-white" style="width:25%">
                        <form  method="POST" action="isresult.php">
                        <img src="images/nokia/Nokia-9-PureView.jpg" alt="Person" style="width:100%">
                        <div class="w3-container">
                          <h4><b><input type=submit class="w3-btn w3-white" value="Nokia" style="width:50%" name="name"></b></h4>
                           <input type="hidden" value="mobile" name ="catg">
                          <p>Quality assured</p>
                        </div>
                        </form>
                     </div>
                     
                     <div data-aos="fade-right" class="w3-card w3-cell w3-padding w3-mobile w3-white" style="width:25%">
                        <form action="isresult.php" method="POST">
                        <img src="images/honor/Honor-View-20.jpg" alt="Person" style="width:100%">
                        <div class="w3-container">
                          <h4><b><input type=submit class="w3-btn w3-white" value="Honor" style="width:50%" name="name"></b></h4>
                           <input type="hidden" value="mobile" name ="catg">
                          <p>Real value for money</p>
                        </div>
                        </form>
                      </div>
                    
                      <div data-aos="fade-right" class="w3-card w3-cell w3-padding w3-mobile w3-white" style="width:25%">
                        <form action="isresult.php" method="POST"> 
                        <img src="images/samsung/Samsung-Galaxy-A70s.jpg" alt="Person" style="width:100%">
                        <div class="w3-container">
                          <h4><b><input type=submit class="w3-btn w3-white" value="Samsung" style="width:50%" name="name"></b></h4>
                          <input type="hidden" value="mobile" name ="catg">
                          <p><center>Bigger battery better display</center></p>
                        </div>
                        </form>
                     </div>
                 
                </div>
              <!------------------------------------------------------------------------------------------------|||-->
                <div class="w3-row w3-padding w3-blue">
                        
                     <div data-aos="fade-left" class="w3-card w3-cell w3-padding w3-mobile w3-white" style="width:25%">
                        <form action="isresult.php" method="POST">
                        <img src="images/mi/k20pro.jpg" alt="Mi" style="width:100%">
                        <div class="w3-container">
                          <h4><b><input type=submit class="w3-btn w3-white" value="Mi" style="width:50%" name="name"></b></h4>
                           <input type="hidden" value="mobile" name ="catg">
                          <p>Flagship killer</p>
                        </div>
                         </form>
                      </div>
                    
                      <div data-aos="fade-left" class="w3-card w3-cell w3-padding w3-mobile w3-white" style="width:25%">
                        <form action="isresult.php" method="POST">
                        <img src="images/oppo/OPPO-RENO-Z.jpg" alt="Person" style="width:100%">
                        <div class="w3-container">
                          <h4><b><input type=submit class="w3-btn w3-white" value="Oppo" style="width:50%" name="name"></b></h4>
                           <input type="hidden" value="mobile" name ="catg">
                          <p>Futuristic & Featuristic</p>
                        </div>
                        </form>
                     </div>
                     
                     <div data-aos="fade-right" class="w3-card w3-cell w3-padding w3-mobile w3-white" style="width:25%">
                        <form action="isresult.php" method="POST">
                        <img src="images/vivo/z1pro.jpg" alt="Person" style="width:100%">
                        <div class="w3-container">
                          <h4><b><input type=submit class="w3-btn w3-white" value="Vivo" style="width:50%" name="name"></b></h4>
                           <input type="hidden" value="mobile" name ="catg">
                          <p>Innovative - Camera and Music</p>
                        </div>
                        </form>
                      </div>
                    
                      <div data-aos="fade-right" class="w3-card w3-cell w3-padding w3-mobile w3-white" style="width:25%">
                        <form action="isresult.php" method="POST">
                        <img src="images/asus/6z.jpg" alt="Person" style="width:100%">
                        <div class="w3-container">
                          <h4><b><input type=submit class="w3-btn w3-white" value="Asus" style="width:50%" name="name"></b></h4>
                           <input type="hidden" value="mobile" name ="catg">
                          <p>All round performance</p>
                        </div>
                        </form>
                     </div>
                 
                </div>
              <!------------------------------------------------------------------------------------------------|||-->
                <div  class="w3-row w3-padding  w3-blue w3-mobile">
                    
                      <div data-aos="fade-left" class="w3-card w3-cell w3-padding w3-mobile w3-white" style="width:25%">
                        <form action="isresult.php" method="POST">
                        <img src="images/moto/Motorola-One-Macro.jpg" alt="Mi" style="width:100%">
                        <div class="w3-container">
                          <h4><b><input type=submit class="w3-btn w3-white" value="Moto" style="width:50%" name="name"></b></h4>
                           <input type="hidden" value="mobile" name ="catg">
                          <p>Hello Moto</p>
                        </div>
                        </form>
                      </div>
                    
                      <div data-aos="fade-left" class="w3-card w3-cell w3-padding w3-mobile w3-white" style="width:25%">
                        <form action="isresult.php" method="POST">
                        <img src="images/infinix/infinix-s5.jpg" alt="Person" style="width:100%">
                        <div class="w3-container">
                         <h4><b><input type=submit class="w3-btn w3-white" value="Infinix" style="width:50%" name="name"></b></h4>
                          <input type="hidden" value="mobile" name ="catg">
                          <p>Affordable</p>
                        </div>
                        </form>
                     </div>
                     
                     <div data-aos="fade-right" class="w3-card w3-cell w3-padding w3-mobile w3-white" style="width:25%">
                        <form action="isresult.php" method="POST">
                        <img src="images/pixel/3xl.jpg" alt="Person" style="width:100%">
                        <div class="w3-container">
                          <h4><b><input type=submit class="w3-btn w3-white" value="Pixel" style="width:50%" name="name"></b></h4>
                           <input type="hidden" value="mobile" name ="catg">
                          <p>By Google</p>
                        </div>
                        </form>
                      </div>
                    
                      <div data-aos="fade-right" class="w3-card w3-cell w3-padding w3-mobile w3-white" style="width:25%">
                        <form action="isresult.php" method="POST">
                        <img src="images/OnePlus-7T.jpg" alt="Person" style="width:100%">
                        <div class="w3-container">
                          <h4><b><input type=submit class="w3-btn w3-white" value="One plus" style="width:50%" name="name"></b></h4>
                           <input type="hidden" value="mobile" name ="catg">
                          <p>Android's Apple</p>
                        </div>
                        </form>
                     </div>    
                     
                </div>
              <!-------------------------------------------Accessories------------------------------------------|||-->
              
              <h2 data-aos="fade-left" style="font-family: 'Fredoka One';" class="w3-blue w3-padding" >Mobile Accessories</h2>
                 
                <div class="w3-row w3-padding  w3-round w3-mobile w3-blue" id="accessories">
                        
                     <div data-aos="fade-right" class="w3-card w3-cell w3-padding w3-mobile w3-white" style="width:25%">
                         <form action="accresult.php" method="POST">
                        <img src="images/accessories/earphones.jpg" alt="Person" style="width:100%">
                        <div class="w3-container">
                          <h4><b><input type=submit class="w3-btn w3-white" value="Earphones"  name="name"></b></h4>
                          <input type="hidden" value="earphones" name ="catg">
                          <p>Wired/Wireless - headphones</p>
                        </div>
                        </form>
                      </div>
                    
                      <div data-aos="fade-right" class="w3-card w3-cell w3-padding w3-mobile w3-white" style="width:25%">
                        <form action="accresult.php" method="POST">
                        <img src="images/accessories/speaker.jpg" alt="Person" style="width:100%">
                        <div class="w3-container">
                          <h4><b><input type=submit class="w3-btn w3-white" value="Speakers"  name="name"></b></h4>
                          <input type="hidden" value="speakers" name ="catg">
                          <p>Wired/Wireless</p>
                        </div>
                        </form>
                     </div>
                     
                     <div data-aos="fade-right" class="w3-card w3-cell w3-padding w3-mobile w3-white" style="width:25%">
                        <form action="accresult.php" method="POST">
                        <img src="images/accessories/sd.jpg" alt="Person" style="width:100%">
                        <div class="w3-container">
                         <h4><b><input type=submit class="w3-btn w3-white" value="Memory Cards"  name="name"></b></h4>
                         <input type="hidden" value="memorycard" name ="catg">
                          <p>SD, micro SD</p>
                        </div>
                        </form>
                    </div>
                    
                    <div data-aos="fade-right" class="w3-card w3-cell w3-padding w3-mobile w3-white" style="width:25%">
                        <form action="accresult.php" method="POST">
                        <img class="w3-round" src="images/accessories/cases.png" alt="Person" style="width:100%">
                        <div class="w3-container">
                        <h4><b><input type=submit class="w3-btn w3-white" value="Cases"  name="name"></b></h4>
                        <input type="hidden" value="cases" name ="catg">
                          <p>Back,Flip Covers, Cases</p>
                        </div>
                        </form>
                      </div>
                </div>
                    
                <div class="w3-row w3-padding  w3-round w3-mobile w3-blue">
                      
                       <div data-aos="fade-left" class="w3-card w3-cell w3-padding w3-mobile w3-white" style="width:25%;">
                       <form action="accresult.php" method="POST">
                        <img src="images/accessories/protection.jpg" alt="Person" style="width:100%">
                        <div class="w3-container">
                          <h4><b><input type=submit class="w3-btn w3-white" value="Screen Guards"  name="name"></b></h4>
                          <input type="hidden" value="mprotection" name ="catg">
                          <p>Tempered glass, guard</p>
                        </div>
                        </form>
                       </div>
                     
                     <div data-aos="fade-left" class="w3-card w3-cell w3-padding w3-mobile w3-white" style="width:25%">
                        <form action="accresult.php" method="POST">
                        <img src="images/accessories/pendrive.jpg" alt="Person" style="width:100%">
                        <div class="w3-container">
                          <h4><b><input type=submit class="w3-btn w3-white" value="Storage Devices"  name="name"></b></h4>
                          <input type="hidden" value="storage" name ="catg">
                          <p>Pen drive, Hard disk</p>
                        </div>
                        </form>
                      </div>
                     
                     <div data-aos="fade-left" class="w3-card w3-cell w3-padding w3-mobile w3-white" style="width:25%">
                        <form action="accresult.php" method="POST">
                        <img src="images/accessories/cables.jpg" alt="Person" style="width:100%">
                        <div class="w3-container">
                          <h4><b><input type=submit class="w3-btn w3-white" value="Cables"  name="name"></b></h4>
                          <input type="hidden" value="charger" name ="catg">
                          <p>Type B,C,Lightning</p>
                        </div>
                        </form>
                     </div>
                     
                      <div data-aos="fade-left" class="w3-card w3-cell w3-padding-16 w3-mobile w3-white" style="width:25%">
                        <form action="accresult.php" method="POST">
                        <img src="images/accessories/otg.jpg" alt="Person" style="width:100%">
                        <div class="w3-container">
                         <h4><b><input type=submit class="w3-btn w3-white" value="Connectivity"  name="name"></b></h4>
                         <input type="hidden" value="connectivity" name ="catg">
                          <p>OTG,AUX cables</p>
                        </div>
                        </form>
                     </div>
                     
                </div>
                 
             <!-------------------------------------------------------------------------------------------------|||-->
              
            </div>
             <br><br>
            <!--Scroll animation-->
            <script>
                AOS.init();
            </script>
            
    </body>
    
</html>