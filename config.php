<?php
$gnoErr =$passwordErr  = "";
$servername = "localhost";
$username = "root";
$password = "";
$dbname="Library";  
$tbl_name="books"; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
?>