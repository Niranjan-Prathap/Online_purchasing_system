<?php
session_start();
?>

<?php include('config.php');?>

<?php

    if(isset($_POST['prodid']))
    {
        if(isset($_SESSION['id']))
        {
            $pid = $_POST['prodid'];
            $email=$_SESSION['id'];
            $pname=$_POST['mname'];
            $qty = $_POST['qty'];
            $amt = $_POST['amt'];
             $query="SELECT * FROM cart WHERE (email='$email') AND (pid='$pid')"; 
             $result = $con->query($query);
            
            if ($result->num_rows > 0)
            {
                echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Item already in cart to change quantity remove and add the product to cart.');
                        window.location.href='users/customer/cart.php';
                       </script>");
                
            }
            else
            {
            /*$sql2="UPDATE orders SET tot=((qty*amt)+(qty*50))";
            $con->query($sql2);*/
                $sql="INSERT INTO cart (email,pid,pname,qty,amt) VALUES ('$email', '$pid', '$pname', '$qty', '$amt')";
                
                if($con->query($sql) === true)
                {
                    echo "<script>
                             window.alert('Item added to cart!')
                             window.location.href='users/customer/cart.php';
                          </script>";
                }
                else
                {
                     echo "<script>
                        window.alert('Something went wrong! Try again later.')
                        window.location.href='index.php';
                      </script>";      
                }
            }
            
        }
        else
        {
            echo "<script>
                     window.alert('To add item(s) to cart. You must sign in!')
                    window.location.href='users/customer/index.php';
                  </script>";
        }
    }
?>