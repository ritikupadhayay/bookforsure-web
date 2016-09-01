<!DOCTYPE html>
<html>
<title>BOOKFORSURE</TITLE>

<!---add with css--->
<link rel="stylesheet" href="postadd.css" />

<?php
error_reporting(E_ALL ^ E_NOTICE);
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

$sql = "select chk FROM singup where email='$loginemail' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
		 $chk=$row["chk"];
		 
		 
     }
}

if($chk==1)
{
echo  '<br /><form method="POST"> <input type=submit name="oldbook" value="OLD BOOKS" DIV ID="p1" > </a>';
echo  '<br /><a href=oldbook.php><input type=button value="CLASS NOTES" DIV ID="p2" > </a>';
echo  '<br /><a href=oldbook.php><input type=button value="ENTRANCE BOOKS" DIV ID="p3" > </a>';
echo  '<br /><a href=oldbook.php><input type=button value="FOTO STATED BOOKS" DIV ID="p4" > </a>';
echo  '<br /><a href=oldbook.php><input type=button value="DONATE BOOKS" DIV ID="p5" > </a>';
echo  '<br /><a href=oldbook.php><input type=button value=MAGAZINES DIV ID="p6" > </a>';
echo  '<br /><a href=oldbook.php><input type=button value=COACHING DIV ID="p7" > </a>';

}
else
{
	echo "Login Please";
	 echo  "<br /><br><a href=login.php><input type=button value=Login></a>";
}

		 
if(isset($_POST['oldbook'])) 
{ 
require 'oldbook.php';
}
?>
</BODY>
</html>