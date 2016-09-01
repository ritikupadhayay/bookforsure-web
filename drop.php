<?php

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

$bbid= $_POST["id"];

$sql = "delete from post where pid = $bbid";
$result = $conn->query($sql);


echo  "<br />Your ad Deleted.....<br>";
echo  "<br /><a href=profile.php><input type=button value=Back></a>";


$conn->close();
?>  


