<?php 
    session_start();
?>
<?php include('config.php'); ?>

<?php 
require 'PHPMailer/PHPMailerAutoload.php';
 $mail = new PHPMailer;
 if(isset($_SESSION['otp']))
 {
        if(isset($_POST['otpsbmt']))
        {
            $otp = $_SESSION['otp'];
            $eotp = $_POST['otp'];
            
            $name =  $_SESSION['cuname'];
            $email =$_SESSION['cemail'];
            $mobile=$_SESSION['cphno'];
            $address =$_SESSION['cpaddr'];
            $password= $_SESSION['cpw'];
            
            if($otp == $eotp)
            {
                echo "<script>
                            window.alert('success');
                      </script>";
                $sql="INSERT INTO custdetails (uname,email,phno,paddr,pw) VALUES ('$name','$email','$mobile','$address','$password')";
                    if($con->query($sql) === true)
                    {
                        echo ("<script LANGUAGE='JavaScript'>
                                window.alert('You account is created');
                                
                               </script>");
                             
                             
                            unset($_SESSION['cuname']);
                            unset($_SESSION['cemail']);
                            unset($_SESSION['cphno']);
                            unset($_SESSION['cpaddr']);
                            unset($_SESSION['cpw']);
                            unset($_SESSION['otp']);
                            
                            
                            echo ("<script LANGUAGE='JavaScript'>
                                        
                                       window.location.href='index.php';
                                       </script>");
                         
                    }
                
                    else 
                    {
                        $error="Something went wrong. Please try again";
                        
                         echo ("<script LANGUAGE='JavaScript'>
                                window.alert('It seems the details you entered is already registered. Pls try again with new details');
                                window.location.href='cract1.php';
                               </script>");
                    }
            }
            else
            {
                echo"<script>
                        window.alert('Invalid OTP');
                        window.location.href='cract1.php';
                     </script>";
            }
        }
   
?>

<html>
    <title>Home - NNN MOBILES</title>
    <link rel = "icon" href ="/images/logo hd.png" type = "image/x-icon"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3.css">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <body>
        
        <div class="w3-container w3-blue  w3-mobile" style="">
                     <center><h1 class="w3-round" style="font-family: 'Fredoka One', cursive;font-size: 42px;color:yellow;">NNN - MOBILES</h1></center>
        </div>
        
        <div class="w3-container w3-mobile w3-border" style="margin:auto;width:50%;position:relative;top:150px;">
            <center><h3 class="w3-blue w3-padding-16" style="font-family: 'Fredoka One', cursive;color:yellow;">Enter the OTP sent to your registered Email Id.</h3></center>
            <form method="POST">
                <br><p> </p>
            <label>Enter OTP</label>
            <input type="text" class="w3-input" name="otp">
                <br><p> </p>
            <input type="submit" class="w3-button w3-block w3-blue w3-hover-yellow w3-round w3-padding-16" value="Confirm" name="otpsbmt">
            </form>
        </div>   
    </body>
</html>
<?php }
else
{
    echo "<script>
            window.location.href='index.php';
          </script>";
}?>
