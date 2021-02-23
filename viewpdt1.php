<?php 
session_start();
?>
<?php if(isset($_POST['pid'])) { ?>
<html>
    <title>View Product - NNN MOBILES</title>
    <link rel = "icon" href ="/images/logo hd.png" type = "image/x-icon">
    <link href="w3.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<head><meta http-equiv="Refresh" content="1; url=https://nnnmobiles.000webhostapp.com/index.php"/></head>-->
    <body>
            <?php include ('config.php');?>
            <?php 
                $pid = $_POST['pid'];
                $query="SELECT * FROM accessories where aid='$pid'";
                $result=mysqli_query($con,$query);
                $rows = mysqli_fetch_assoc($result);
            ?>
            <!--<div class="w3-container w3-blue w3-mobile w3-display-top">
                <h1 style="font-family: 'Fredoka One', cursive;font-size: 50px; color:yellow;"><img src="/images/logo hd.png" style="width:7.5%;left:5px;top:5px" class="w3-display-topleft w3-round"><center>NNN - MOBILES</center> 
                </h1> 
            </div>-->
            <!--<div class="w3-container w3-display-middle">
            <center><img src="https://image.flaticon.com/icons/png/512/777/777081.png" style="width:50%">
                <h1>This page is under maintenance.</h1><br><h2>Visit <a href="https://nnnmobiles.000webhostapp.com" class="w3-btn w3-blue w3-padding w3-round">NNN - MOBILES</a></h2></center>
            </div> maintenance-->
            <?php include('header.php'); ?>
            <div class="w3-container w3-blue">
                <div class="w3-panel w3-white w3-round">
                    <p><a href="/nnnmobiles/index.php" class="w3-hover-blue" style="text-decoration: none;">Home</a> <small>></small> View Product</p>
                </div>
                <form method="post" action="updatecart.php" target="_blank">
                <div class="w3-row-padding w3-padding-16 w3-white" style="margin:auto;width:90%">
                    <div class="w3-container w3-third w3-white">
                        <center><img src="<?php echo $rows['img']; ?>" style="width:100%" class =" w3-padding-16"></center><br>
                        <!--<input type="submit" name="addtocart" value="ADD TO CART" class="w3-btn w3-blue w3-padding-16 w3-block w3-large>-->
                       <center>QTY <input type="number" name="qty" class="w3-input w3-padding" min=1 max=3 value="1"style="width:25%;margin:auto;text-align:center" pattern="\d*"></center>
                        <?php if($rows['stockin'] > 3) { ?>
                        <button class="w3-btn w3-block w3-hover-yellow w3-blue w3-padding-16" type="submit"><i class='fas fa-cart-plus'></i> ADD TO CART</button> 
                       <?php } else { ?>
                        <button class="w3-btn w3-block w3-hover-yellow w3-blue w3-padding-16" type="submit" disabled><i class='fas fa-cart-plus'></i> OUT OF STOCK</button> 
                        <?php } ?>
                    </div>
                    <div class="w3-container w3-twothird w3-white">
                     <h4><?php echo $rows['aname'];?></h4>
                     <input type="hidden" value="<?php echo $rows['aname'];?>" name="mname">
                     <h3><b>&#x20b9;<?php echo $rows['price'];?></b> <small><sub>+ delivery charge</sub></small></h3>
                     <input type="hidden" value="<?php echo $rows['price'];?>" name="amt">
                         <div class="w3-container w3-card">
                             <p>Product Highlights</p>
                             <div class="w3-left">
                                 <p><b>PID:</b><?php echo $rows['aid'];?> 
                                 <input type="hidden" value="<?php echo $rows['aid'];?>" name="prodid">
                                 </p> 
                                
                                 <p><b>Brand:</b> <?php echo $rows['brand'];?>
                                 <input type="hidden" value="<?php echo $rows['brand'];?>" name="brand">
                                 </p>
                                 
                                 <p><b>Type:</b> <?php echo $rows['type'];?>
                                 <input type="hidden" value="<?php echo $rows['type'];?>" name="storage">
                                 </p>
                             </div>
                             <div class="w3-right">
                                 <p><b>Color:</b> <?php echo $rows['color'];?></p>
                                 <?php if($rows['stockin'] <3) { ?>
                                 <p>Status: <span class="w3-text-red">OUT OF STOCK</span></p>
                                 <?php } ?>
                             </div>
                         </div>
                    </div>
                </div>
                </form>
            </div>
            
            <br>
            <div class="w3-container w3-blue w3-bottom">
                <center><h5><i class='far fa-copyright'><span style="font-family: 'Fredoka One';"> NNN - MOBILES, All Rights Reserved - 2020.</span></i></h5></center>
            </div>
    </body>
</html>
<?php } else{
    echo "<script>
                window.location.href='index.php';
          </script>";
}
?>