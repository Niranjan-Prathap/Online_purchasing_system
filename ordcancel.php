<?php include('config.php');  $oidresult =""; $emailresult=""; $oid="";$email="";$pname=""; $status=""; ?>
<?php 
if(isset($_POST['send']))
{
   
    $checkoid = "SELECT oid FROM orders WHERE oid='".$_POST['oid']."'";
    $oidres = mysqli_query($con,$checkoid);
    $oidcnt = mysqli_num_rows($oidres);
    if($oidcnt > 0)
    {
        $oid = $_POST['oid'];
    }
    else
    {
        $oidresult = "* Invalid order ID";
    }
    $checkemail = "SELECT email FROM orders WHERE email='".$_POST['uname']."'";
    $emailres =  mysqli_query($con,$checkemail);
    $emailcnt = mysqli_num_rows($emailres);
    if($emailcnt > 0)
    {
        $email = $_POST['uname'];
    }
    else
    {
        $emailresult = "* Invalid email id or username";
    }
        $pname = $_POST['pname'];
        
    if($oid != "" && $email != "" && $pname != "")
    {   
        $check = "SELECT oid,email FROM orders WHERE oid = '$oid' AND email='$email'";
        $checkres = mysqli_query($con,$check);
        $checkcnt = mysqli_num_rows($checkres);
        if($checkcnt >0)
        {
            $sql = "SELECT * from cancelreq WHERE oid = '$oid' AND email= '$email'";
            $result = mysqli_query($con,$sql);
            $cnt = mysqli_num_rows($result);
            if($cnt>0)
            {
                echo "<script>window.alert('Cancel request from the user for the oid is already registered!');
                      window.location.href='ordcancel.php';  
                      </script>";
            }
            else
            {
                $query = "INSERT into cancelreq(oid,pname,email) VALUES ('$oid','$pname','$email')";
                if($con ->query($query) == true)
                {
                    echo "<script>window.alert('Your request has been received successfully!');
                      window.location.href='ordcancel.php';  
                      </script>";
                }
                else
                {
                    echo "<script>window.alert('Unable to send request try again!');window.location.href='ordcancel.php';</script>";
                }
            }
        }
        else
        {
            echo "<script>window.alert('No orders found to cancel from the requested email!');
                window,location.href='ordcancel.php';
                </script>";
        }
    }
}
?>
<?php 
if(isset($_POST['checkstatus']))
{
    $orid = $_POST['orid'];
    $sql1 = "SELECT oid from cancelreq WHERE oid='$orid'";
    $res1 = mysqli_query($con,$sql1);
    $cnt = mysqli_num_rows($res1);
    if($cnt > 0)
    {
        $sql3 = "SELECT status from cancelreq WHERE oid='$orid'";
        $res3 = mysqli_query($con,$sql3);
        $rows = mysqli_fetch_assoc($res3);
        $status=$rows['status'];
    }
    else
    {
        $status = "OID NOT FOUND";
    }
}
?>
<html>
<title>Cancel Order - NNN MOBILES</title>

    <link rel = "icon" href ="/images/logo hd.png" type = "image/x-icon"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3.css">
    <link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed:600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Saira&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Lemonada&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tommorow&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <body>
        <div class="w3-container w3-mobile w3-blue">
            <center><h1 class="w3-round" style="font-family: 'Fredoka One', cursive;font-size: 50px;color:yellow; ">NNN - MOBILES</h1></center>
        </div>
        <br>
        <div class="w3-container">
        <div class="w3-row">
            <div class="w3-twothird">
                <div class="w3-container w3-two-third w3-mobile  w3-padding-16 w3-blue" style="margin:auto;width:75%">
                    <h3 style="font-family: 'Fredoka One';"><center>Enter the required details to cancel your order</center></h3><br><center>Note : Cancel request is not applicable for shipped orders.</center><br>
                    <form method="POST" class="w3-white w3-padding-large" >
                        <lable>Order ID <small><?php echo $oidresult; ?></small></lable>
                        <input type="text" class="w3-input" name=oid required placeholder="enter the order id">
                        <br><p> </p>
                        <lable>Product Name</lable>
                        <input type="text" class="w3-input" name=pname required placeholder="enter the product name as given in your orders section">
                        <br><p> </p>
                        <lable>Username <small><?php echo $emailresult; ?></small></lable>
                        <input type="text" class="w3-input" name=uname required placeholder="enter your registered email id">
                        <br><p> </p>
                    <button type="submit" name="send" class="w3-btn w3-large w3-blue w3-right w3-hover-yellow" style="font-family: 'Fredoka One';width:45%">Send</button>
                    <button type="submit" name="cancel" class="w3-btn w3-large w3-blue w3-left w3-hover-yellow" style="font-family: 'Fredoka One';width:45%">Cancel</button>
                        <br><br><p> </p>
                    </form>
                </div>
            </div>
            <div class="w3-third">
                <div class="w3-container w3-blue" style="margin:auto;width:75%">
                    <h1 style="font-family: 'Fredoka One';">Request Status</h1>
                    <form method="POST" class="w3-white w3-padding-large">
                        <label>Enter your order ID</label>
                        <input type="text" name="orid" class="w3-input" required>
                        <br>
                        <input type="submit" name="checkstatus" class="w3-btn w3-blue w3-hover-yellow w3-block">
                        <br><p><?php echo "STATUS: ". $status; ?></p>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>
