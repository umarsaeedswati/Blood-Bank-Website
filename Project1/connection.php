<?php


function Connect()
{
 $dbhost = "localhost";
 $dbuser = "admin";
 $dbpass = "123456";
 $dbuser = "umar";
 $dbpass = "123";
 $dbuser = "sufyan";
 $dbpass = "123";
 $dbuser = "waleed";
 $dbpass = "123";
 $dbname = "bloodbank";

 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

 return $conn;
}
 
?>
