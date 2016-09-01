<?php

session_start();
// Echo session variables that were set on previous page
$loginemail=  $_SESSION["email"];

$servername = "mysql.1freehosting.com";
$username = "root";
$password = "ritik";
$dbname = "oldbooks";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

//post ad

$sql = "select bname FROM oldbook semail='$loginemail'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br><br>  Book Ad: ". $row["bname"]."<br><br>";
     }
	 
	 
} else {
     echo "No Book Post";
}

$sql = "select cnname FROM cn_notes where cnsemail='$loginemail'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br><br>  Class Notes Ad: ". $row["cnname"]."<br><br>";
     }
	 
	 
} else {
     echo "No Class Notes Post";
}


//post ad

echo  "<br><br><a href=logout.php><input type=button value=Logout></a>";
$conn->close();
?>  