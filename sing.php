<!DOCTYPE HTML> 
<html>
<head>
</head>
<body> 

<?php
// define variables and set to empty values
$name = $email = $pass = $re_pass = $mobile = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = test_input($_POST["name"]);
   $email = test_input($_POST["email"]);
   $pass = test_input($_POST["pass"]);
   $re_pass = test_input($_POST["re_pass"]);
   $mobile = test_input($_POST["mobile"]);
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}



?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Name: <input type="text" name="name">
   <br><br>
   E-mail: <input type="text" name="email">
   <br><br>
   Password: <input type="password" name="pass">
   <br><br>
   Re-Password: <input type="password" name="re_pass">
   <br><br>
   Mobile: <input type="text" name="mobile">
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>

<?php
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


if($pass==$re_pass)
{
	$servername = "localhost";
$username = "root";
$password = "ambika";
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
	echo "Re-Enter Password";
}


?>
</body>
</html>
