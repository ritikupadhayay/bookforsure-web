<!DOCTYPE html>
<html>

<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
// Echo session variables that were set on previous page
$loginemail=  $_SESSION["email"];

$servername = "localhost";
$username = "root";
$password = "ambika";
$dbname = "oldbooks";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
 $s="update singup set chk=0 where email='$loginemail'";
         $result = $conn->query($s);


// remove all session variables

session_unset(); 

// destroy the session 
session_destroy(); 

echo  '<br><br><br><b><input type=button value="You Are Logout" Style=" BORDER-RIGHT:#FA5858 3px solid #FA5858;
 BORDER-TOP:#FA5858    3px solid #FA5858;
 BORDER-left:#FA5858    3px solid #FA5858;
 BORDER-bottom:#FA5858  3px solid #FA5858; 
background-color:#81F7F3; 
 FONT-SIZE: 40pt;
position: absolute;

left:0px;

height:100px;
width:400px;"></a>';
?>


<script>

window.onunload = function(login){
  window.opener.location.reload();
   window.close();
  }

</script>

</BODY>
</html>