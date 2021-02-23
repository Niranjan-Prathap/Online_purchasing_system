<link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed:600&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Lemonada&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="hover.css" rel="stylesheet" media="all">

            
            <div class="w3-container w3-blue w3-mobile">
                <h1 style="font-family: 'Fredoka One', cursive;font-size: 50px; color:yellow;"><img src="logo hd.png" style="width:7.5%;left:10px;top:20px" class="w3-display-topleft w3-round"><center>NNN - MOBILES</center> 
                  <!--<p><img src="/images/logo.png" style="width:15%" class="w3-round w3-topleft">JB - MOBILES</p>--> 
                </h1> 
            </div>
            <!--------------------------------------------------------------------------------------------------|||-->
            <div class="w3-bar w3-blue  w3-padding w3-animate-right w3-mobile">
                <form method="POST" action="sresult.php">
                <a href="/nnnmobiles/index.php#mobiles" class="w3-bar-item w3-button w3-mobile w3-hover-none w3-border-blue w3-bottombar w3-hover-border-yellow w3-hover-text-white" style="font-family: 'Fredoka One';font-size: 16">Mobiles
                </a>
                <a href="/nnnmobiles/index.php#accessories" class="w3-bar-item w3-button w3-mobile w3-hover-none w3-border-blue w3-bottombar w3-hover-border-yellow w3-hover-text-white" style="font-family: 'Fredoka One';font-size: 16">Accessories
                </a>
                
               
                <input class="w3-input w3-bar-item w3-border w3-round w3-mobile " name="search" type="text" placeholder="What are you looking for...?" style="width:60%;position:relative; left:12.5px;font-family: 'Titillium Web';" required>
                
                
                <input type="submit" value="Search" class="w3-btn w3-bar-item w3-yellow w3-mobile w3-text-blue w3-round w3-padding" style="position:relative;left:12.5px;font-family: 'Fredoka One';font-size: 16" name="submit">
                
                
                
                <?php if(isset($_SESSION['id'])) { ?>
                    <a href="users/customer/cdashboard.php?" class=" w3-padding w3-right w3-bar-item w3-button w3-mobile w3-hover-none w3-border-blue w3-bottombar w3-hover-border-yellow w3-hover-text-white" style="font-family: 'Fredoka One';font-size: 16";><i class='fas fa-user-circle' style='font-size:24px'></i> Profile
                    </a>
    
                <?php } else{ ?> 
                    <a href="users/customer/?"  class=" w3-padding w3-right w3-bar-item w3-button w3-mobile w3-hover-none w3-border-blue w3-bottombar w3-hover-border-yellow w3-hover-text-white" style="font-family: 'Fredoka One';font-size: 16";>Sign in <!--icon <i class='fas fa-sign-in-alt' style='font-size:24px'></i>--> 
                    </a>
                <?php } ?>
                
                </form>
                </div>
                
            