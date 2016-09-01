<!DOCTYPE html>
<html>
<?php
require 'title.php';
?>

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
echo  '<br /><DIV ID="p1"><form method="POST"><input type=submit name="oldbook" value="OLD BOOKS" id="a1"><img src="old_books.png" alt="old_books" style="width:50px;height:50px"></form></DIV>';
echo  '<br /><DIV ID="p2"><form method="POST"><input type=submit name="donatebook" value="Donate Book" id="a2"><img src="donatebook.png" alt="donatebook" style="width:50px;height:50px"></form></DIV>';
echo  '<br /><DIV ID="p3"><form method="POST"><input type=submit name="entrancebook" value="Entrance Book" id="a3"><img src="entrancebook.png" alt="entrance_book" style="width:50px;height:50px"></form></DIV>';
echo  '<br /><DIV ID="p4"><form method="POST"><input type=submit name="photostated" value="Photo Stated" id="a4"><img src="photostated.png" alt="photostated" style="width:50px;height:50px"></form></DIV>';
echo  '<br /><DIV ID="p5"><form method="POST"><input type=submit name="classnotes" value="Class Notes" id="a5"><img src="classnotes.png" alt="classnotes" style="width:50px;height:50px"></form></DIV>';
echo  '<br /><DIV ID="p6"><form method="POST"><input type=submit name="magazines" value="Magazines" id="a6"><img src="magazine.png" alt="magazines" style="width:90px;height:83px"></form></DIV>';
echo  '<br /><DIV ID="p7"><form method="POST"><input type=submit name="newbook" value="New Book" id="a7"><img src="newbook.png" alt="newbook" style="width:50px;height:50px"></form></DIV>';
echo  '<br /><DIV ID="p8"><form method="POST"><input type=submit name="coachingads" value="Coaching Ads" id="a8"><img src="coachingads.png" alt="coachingads" style="width:50px;height:50px"></form></DIV>';
}
else
{
	echo "Login Please";
	 echo  "<br /><br><a href=login.php><input type=button value=Login></a>";
}
	
		 
if(isset($_POST['oldbook'])) 
{ 
echo '<img src="arrow2.png"alt="arrow2" style="width:60px; position:absolute; left:410px; height:50px;top:150px;"';
require 'oldbook.php';
}
if(isset($_POST['donatebook'])) 
{ 
 echo '<img src="arrow2.png"alt="arrow2" style="width:60px; position:absolute; left:410px; height:50px;top:250px;"';
require 'donatebook.php';
}
if(isset($_POST['entrancebook'])) 
{ 
 echo '<img src="arrow2.png"alt="arrow2" style="width:60px; position:absolute; left:410px; height:50px;top:350px;"';
require 'entrancebook.php';
}
if(isset($_POST['photostated'])) 
{ 
 echo '<img src="arrow2.png"alt="arrow2" style="width:60px; position:absolute; left:410px; height:50px;top:450px;"';
require 'photostated.php';
}
if(isset($_POST['classnotes'])) 
{ 
 echo '<img src="arrow2.png"alt="arrow2" style="width:60px; position:absolute; left:410px; height:50px;top:550px;"';
require 'classnotes.php';
}
if(isset($_POST['magazines'])) 
{ 
 echo '<img src="arrow2.png"alt="arrow2" style="width:60px; position:absolute; left:410px; height:50px;top:650px;"';
require 'magazine.php';
}

?>
<?php

require 'background.js';
?>
</BODY>
</html>