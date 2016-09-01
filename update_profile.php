<!DOCTYPE HTML> 
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 


<form method="POST" >
<h2>UPDATE PROFILE</h2>
<p><span class="error">* required field.</span></p>
   <!--- Name: <input type="text" name="mname" value="<?php  ?>">
   <br><br>
   E-mail: <input type="email" name="email" value="<?php  ?>">
   <br><br>
    Mobile: <input type="text" name="mmobile" value="<?php  ?>">
   <br><br> --->
   Old Password: <input type="password" name="oldpass" value="<?php  ?>">
   <br><br>
   New Password: <input type="password" name="mpass" value="<?php  ?>">
   <br><br>
   Re-Password: <input type="password" name="mre_pass" value="<?php  ?>">
   <br><br>
  
   <input type="submit" name="submit" value="Submit"  > 
</form>
 



<?php


if(isset($_POST['submit'])) 
{ 
 
	
	// define variables and set to empty values
  $oldpassErr = $mpassErr =$mre_passErr = $mmobileErr = "";
$mid =  $oldpass = $mpass = $mre_pass = $mmobile = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
   
     if (empty($_POST["oldpass"])) {
     $oldpass = "";
   } else {
     $oldpass =  $_POST["oldpass"];
     
     }
	 
   if (empty($_POST["mpass"])) {
     $mpass = "";
   } else {
     $mpass =  $_POST["mpass"];
     
     }
   
   
   if (empty($_POST["mre_pass"])) {
     $mre_pass = "";
   } else {
     $mre_pass =  $_POST["mre_pass"];
     }
   

}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

session_start();
$loginemail=  $_SESSION["email"];


if($mpass==$mre_pass)
{
$servername = "mysql.1freehosting.com";
$username = "u192768207_ritik";
$password = "Ritik";
$dbname = "u192768207_ritik";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}


$sql = "select mpass FROM singup where email='$loginemail'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
     $pass=$row["mpass"];
	 }
	  if($oldpass==$pass)
	  {
		  $sql = "update singup set mpass='$mpass' where email='$loginemail'";

if ($conn->query($sql) === TRUE){
	
    echo "<br><br>Password Changed successfully";
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	  }
	  else
	  {
		 echo "<br> Old pass does not exit..."; 
	  }
	  $conn->close();
 }
else
{
    echo "Re- Enter Value";
}
}
else
{
	
	echo ("<br><font color=\"red\">Password Error Please Re-Enter Password</font>");
}

}


?>


</body>
</html>