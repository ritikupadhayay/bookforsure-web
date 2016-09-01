<!DOCTYPE HTML> 
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 

<?php
// define variables and set to empty values
$nameErr = $emailErr = $passErr =$re_passErr = $mobileErr = "";
$pid = $name = $email = $pass = $re_pass = $mobile = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 if (empty($_POST["pid"])) {
     $pid = "";
   } else {
     $pid = test_input($_POST["pid"]);
      
     }
	
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed"; 
     }
   }
   
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
     }
   }
     
   if (empty($_POST["pass"])) {
     $pass = "";
   } else {
     $pass = test_input($_POST["pass"]);
     
     }
   
   
   if (empty($_POST["re_pass"])) {
     $pass = "";
   } else {
     $re_pass = test_input($_POST["re_pass"]);
     }
   

   if (empty($_POST["mobile"])) {
     $mobile = "";
   } else {
     $mobile = test_input($_POST["mobile"]);
     }
   
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2>SING-UP Form</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Pid: <input type="number" name="pid" value="<?php echo $pid;?>">
   <br><br>
   Name: <input type="text" name="name" value="<?php echo $name;?>">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   E-mail: <input type="email" name="email" value="<?php echo $email;?>">
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
   Password: <input type="password" name="pass" value="<?php echo $pass;?>">
   <br><br>
   Re-Password: <input type="password" name="re_pass" value="<?php echo $re_pass;?>">
   <br><br>
   Mobile: <input type="text" name="mobile" value="<?php echo $mobile;?>">
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>


<?php
if($pass==$re_pass)
{
	$servername = "mysql.1freehosting.com";
$username = "root";
$password = "ritik";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO singup (name, email, mobile) VALUES('$name', '$email', $mobile)";

if ($conn->query($sql) === TRUE){
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
echo "<h2>Your Input:</h2>";
echo "$name";
echo "<br>";
echo $email;
echo "<br>";
echo $mobile;
}
else
{
	
	echo ("<br><font color=\"red\">Password Error Please Re-Enter Password</font>");
}

?>

</body>
</html>