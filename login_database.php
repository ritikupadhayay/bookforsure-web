<?php
// define variables and set to empty values
$lemail = $lpass =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $lemail = test_input($_POST["lemail"]);
   $lpass = test_input($_POST["lpass"]);
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

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

$sql = "select mid, mname, email, mmobile FROM singup where email='$lemail' and mpass='$lpass'";
$result = $conn->query($sql);

// Start the session
session_start();
$_SESSION["chk"] = 0;

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         
		 echo "<br>You are log-in... Check your Profile<br>";
		 echo  "<br /><a href=profile.php><input type=button value=Profile></a>";
		 
		 
     }
	 
	


// Set session variables
$_SESSION["email"] = "$lemail";


// to change a session variable, just overwrite it 
$_SESSION["chk"] = 1;

	 
	 
} else {
     echo ("<br><b><font color=\"red\">Email id or pass does not exit.... Please login again....</font>");
	echo  "<br><br><a href=login.php><input type=button value=BACK></a>";
}

$conn->close();


?>
