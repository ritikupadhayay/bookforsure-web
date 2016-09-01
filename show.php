

<?php
$servername = "mysql.1freehosting.com";
$username = "root";
$password = "ritik";
$dbname = "myDB";

$imageData="";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "select * FROM upload where id =54";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) 
	 {

         $imageData=$row["content"];
		  
	 }
	 
	
	 echo '<dt> </dt><dd>'
     . '<img src="data:image/jpeg;base64,' . base64_encode($imageData) . '" width="120" height="150">'
     . '</dd>';
}
?>  
