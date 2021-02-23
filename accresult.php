<?php 
session_start();
?>

<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3.css">
    <link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed:600&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Lemonada&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="w3.css">
    <title>Search - NNN MOBILES</title>
    <link rel = "icon" href ="/images/logo hd.png" type = "image/x-icon"> 
    <head>
        <style>
            .img {
                   float:  left;
                    width:100px;
                    height:150px;
                    background-size:cover;
                }
        </style>
    </head>
    <body>
        <?php include('config.php');?>
        <?php include('header.php');?>
       <!--<div class="w3-container w3-blue ">
                <h1 style="font-family: 'Fredoka One', cursive;font-size: 50px; color:yellow;"><img src="/images/logo hd.png" style="width:7.5%;left:5px;top:5px" class="w3-display-topleft w3-round-large"><center>NNN - MOBILES</center> 
                   
                  <!--<p><img src="/images/logo.png" style="width:15%" class="w3-round w3-topleft">JB - MOBILES</p> 
                </h1> 
            </div>-->
        <?php
            
        ?>
        <div class="w3-container w3-blue w3-mobile">
            <div class="w3-panel w3-white  w3-round">
                    <p><a href="/nnnmobiles/index.php" class="w3-hover-blue w3-white">Home</a> <small> > </small> Search
                    </p>
            </div>
        </div>
            <?php 
                
                     $src =$_POST['name'];
                    $query="SELECT * FROM accessories where aname like'%$src%' or brand like'$src%' or catg like'%$src%' or catg like '$src%'";
                     $result=mysqli_query($con,$query);
                     $cnt=0;
            ?>
            <div class="w3-responsive w3-container w3-blue w3-mobile w3-padding-16">
                <table class="w3-table w3-white w3-bordered w3-round w3-padding-16">
                    <tr>
                        <th colspan="4"><h4>Showing Results for: <i class="w3-text-blue"><?php echo $_POST['name'];?></i></h4></th>
                    </tr>
                    <?php
                      while($rows = mysqli_fetch_assoc($result))
                      { 
                               
                    ?>
                    <tr>
                        
                        <td >
                            <div class="img w3-padding w3-mobile" style="background-image:url('<?php echo $rows['img']; ?>');"></div>
                        </td>
                        
                        <td><?php echo $rows['aname']; ?>
                        <ul>
                            <li>Category: <?php echo $rows['catg']; ?> </li>
                            <li>Brand: <?php echo $rows['brand']; ?> </li>
                            <li>Type: <?php echo $rows['type']; ?> </li>
                            <li>Color:   <?php echo $rows['color']; ?></li>
                        </ul>
                        
                        </td>
                        
                        <td>&#x20b9;<b><?php echo $rows['price']; ?></b></td>
                        <form method="post" action="viewpdt1.php" target="_blank">
                        <td class="w3-center-align">
                            <!--<a href="https://nnnmobiles.000webhostapp.com/" target="_blank" class=" w3-button w3-mobile w3-border w3-round w3-blue w3-hover-yellow w3-large" style="font-family: 'Architects Daughter';font-size: 16;width:60%">
                                
                            View Product
                            
                            </a>-->
                            <input type="submit" value="View Product" class="w3-btn w3-blue w3-hover-yellow w3-large w3-round" name="name" style="font-family: 'Architects Daughter';font-size: 16;">
                            <input type="hidden" value="<?php echo $rows['aid']; ?>" name="pid">
                        </td>
                        </form>
                    </tr>
                <?php } ?>
                </table>
                <br><br>
        </div>   
        <div class="w3-container w3-blue w3-bottom ">
            <h5><center><i class='far fa-copyright'><span style="font-family: 'Fredoka One';"> NNN - MOBILES, All Rights Reserved - 2020.</span></i></center></h5>
        </div>
        
    </body>
</html>