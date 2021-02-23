<?php
$servername = "localhost";
$username = "root"; //Database username.
$password = ""; //Database password.
$dbname = "id12514358_onlinestore"; //Database name or anything you would like to call it.
$con = new mysqli($servername, $username, $password,$dbname);

//Check connection
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
}
?>