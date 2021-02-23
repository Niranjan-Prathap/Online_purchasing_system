<?php
session_start();
?>
<?php
error_reporting(0);
require 'PHPMailer/PHPMailerAutoload.php';
 $mail = new PHPMailer;

include('config.php');

if(isset($_POST['submit']))
{
      $nameerr=$mobileerr=$passworderr=$loactionerr="";
      $name=$mobile=$address=$password="";     
      
    if (empty($_POST["cname"])) 
    {
        $nameErr = "Name is mandatory";
    } 
    else 
    {
        $name = $con->real_escape_string($_POST["cname"]);
    }
  
    if(preg_match('/^[6-9][0-9]{9}$/', $_POST['phno'])) 
    {
      $mobile = $con->real_escape_string($_POST["phno"]);
    }
    else 
    {
        $mobileerr = "Enter 10 digit number";  
    }
  
    if (empty($_POST["paddr"])) 
    {
        $locationerr = "Name is required";
    } 
    else 
    {
        $address = $con->real_escape_string($_POST["paddr"]);
    }
  
    if (empty($_POST["password"])) 
    {
        $passworderr = "Name is required";
    } 
    else 
    {
        $password = $con->real_escape_string($_POST["password"]);
    }
  
    $email=$con->real_escape_string($_POST['email']);
    $password=$con->real_escape_string($_REQUEST['pw']);

    $query="SELECT * FROM custdetails WHERE (phno='$mobile') OR (email='$email')"; 
    $result = $con->query($query);
    
    if ($result->num_rows > 0)
    {
        echo ("<script LANGUAGE='JavaScript'>
                window.alert('It seems that the phone number or email you entered is already registered.Pls try again with a new one!');
               </script>");
    
    }
    else
    {
             $code = rand(100000,999999);
             $_SESSION['otp'] = $code;
             $body='<head>
                        <style>
                        h1
                        {
                            padding:10px;
                            background-color:dodgerblue;
                            color:yellow;
                        }
                        </style>
                    </head>';
             $body .='<div style="border: 1px solid dodgerblue;"><center><h1>Welcome to NNN - MOBILES</h1></center><br>';
             $body .='<p>Thanks for registering in NNN-MOBILES!</p><br>';
             $body .='<p>Your credentials for account creation is given below,</p>';
             $body .='<p>your one time password is:'.$code.'<br>Keep your login credentials safely.</h1><p>';
             $body .='<p>Dont share your login credentials to anybody.</p></div>';
             $body .='<footer style="padding:10px;background-color:dodgerblue;color:white;">Go and get your fav mobiles and accessories</footer>';
             
             $mail->isSMTP();
             $mail->Host='smtp.gmail.com'; 
             $mail->Port=587;
             $mail->SMTPAuth=true; 
             $mail->SMTPSecure='tls';
             $mail->Username='nnnmobilesinfo@gmail.com'; 
             $mail->Password='Born2win';
            
             $mail->setFrom('nnnmobilesinfo@gmail.com','NNN - MOBILES'); 
             $mail->addAddress($_POST['email']); 
             
             $mail->Subject='User Registration - NNN MOBILES'; 
             $mail->Body=$body;
             $mail->isHTML(true);
             
             if(!$mail->send())
             {
                 //$result="Something went wrong. Please try again.";
                  echo ("<script LANGUAGE='JavaScript'>
                            window.alert('Something went wrong! pls try again.');
                            window.location.href='cract1.php';
                           </script>");
             }
             else
             {
                 //$result="Test message sent successfully";
                $code="";
                
                $_SESSION['cuname']=$name;
                $_SESSION['cemail']=$email;
                $_SESSION['cphno']=$mobile;
                $_SESSION['cpaddr']=$address;
                $_SESSION['cpw']=$password;
                echo ("<script LANGUAGE='JavaScript'>
                            window.alert('OTP has been sent to your email id!');
                            window.location.href='ucotp.php';
                           </script>");
             }
        }
}


?>
<html>
    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="w3.css">
        <title>Create Account - NNN MOBILES</title>
        <link rel = "icon" href ="/images/logo hd.png" type = "image/x-icon"> 
        <body>
            <?php include('header.php'); ?>
           <div class="w3-container w3-mobile" style="overflow-x: scroll;">
                
                <div class="w3-panel w3-light-grey w3-round">
                    <p><a href="https://nnnmobiles.000webhostapp.com/" class="w3-hover-blue w3-white">Home</a> / Create User Account
                    </p>
                    <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo ($error); ?> </div><?php } 
                        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo ($msg); ?> </div>
                    <?php }?>
                </div>
                
                <div class="w3-container w3-mobile w3-border w3-blue w3-round">
                     <h2>Enter your details <sub class="w3-right" style="font-size:10px">*mandatory fields</sub></h2> 
                    
                    <form class="w3-container w3-card-4 w3-white w3-round w3-padding-large" autocomplete="off" method="POST">
                     
                      <label><b>Name<sup class="w3-text-blue"> * <?php echo $nameerr;?></sup></b></label>
                      <input class="w3-input w3-animate-input w3-border-blue w3-round" style="width:50%" name="cname" type="text" pattern="[a-zA-Z\s]+" minlength="3" maxlength="50" placeholder="enter your full name" required><br>    
                      
                      <label><b>Email<sup class="w3-text-blue"> * </sup></b></label>
                      <input class="w3-input w3-animate-input w3-border-blue w3-round" style="width:50%" name="email" type="email" maxlength="50" placeholder="abc@email.com" required><br>
                      
                      <label><b>Phone number<sup class="w3-text-blue"> * <?php echo $mobileerr;?></sup></b></label>
                      <input class="w3-input w3-animate-input w3-border-blue w3-round" style="width:50%" name="phno" type="tel" pattern="[6789][0-9]{9}" maxlength="10" minlength="10" placeholder="enter 10 digit mobile number" required><br>
                      
                      <label><b>Permanent Address<sup class="w3-text-blue"> * <?php echo $locationerr;?></sup></b></label>
                      <input class="w3-input w3-animate-input w3-border-blue w3-round" style="width:50%" name="paddr" type="text" maxlength="100" placeholder="house/flat no,Street,Locality,City,Dt.,pin" required><br>
                      
                      <label><b>Password<sup class="w3-text-blue"> * <?php echo $pwerr;?></sup></b></label>
                      <input id="pw" class="w3-input w3-animate-input w3-border-blue w3-round" style="width:50%" name="pw" type="password" pattern="(?=.*[a-z])(?=.*[A-Z]).{8,}" minlength="8" maxlength="50" placeholder="minimun 8 chars with one upper case and one lower case letter" required><br>
                      
                      <label><b>confirm Password<sup class="w3-text-blue"> * <?php echo $pwerr;?></sup></b></label>
                      <input id="cpw" class="w3-input w3-animate-input w3-border-blue w3-round" style="width:50%" name="cpw" type="password" pattern="(?=.*[a-z])(?=.*[A-Z]).{8,}" minlength="8" maxlength="50" placeholder="enter your password again" required><br>
                      
                      <input type="submit" name ="submit" value="submit" class="w3-btn w3-yellow w3-round w3-hover-blue"  style="font-family: 'Architects Daughter';font-size: 20;" onClick="return Validate()"><p></p>
                    
                    </form>
                </div>
            </div>
            
            <script type="text/javascript">
                function Validate() 
                {
                    var password = document.getElementById("pw").value;
                    var confirmPassword = document.getElementById("cpw").value;
                    if (password != confirmPassword) 
                    {
                        alert("Passwords do not match.");
                        return false;
                    }
                    return true;
                }
            </script>
            
        </body>
</html>