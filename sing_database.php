<?php
// define variables and set to empty values
$mnameErr = $emailErr = $mpassErr =$mre_passErr = $mmobileErr = "";
$mid = $mname = $email = $mpass = $mre_pass = $mmobile = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  
	
   if (empty($_POST["mname"])) {
     $mnameErr = "Name is required";
   } else {
     $mname = test_input($_POST["mname"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$mname)) {
       $mnameErr = "Only letters and white space allowed"; 
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
     
   if (empty($_POST["mpass"])) {
     $mpass = "";
   } else {
     $mpass = test_input($_POST["mpass"]);
     
     }
   
   
   if (empty($_POST["mre_pass"])) {
     $mpass = "";
   } else {
     $mre_pass = test_input($_POST["mre_pass"]);
     }
   

   if (empty($_POST["mmobile"])) {
     $mmobile = "";
   } else {
     $mmobile = test_input($_POST["mmobile"]);
     }
   
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}


?>

<?php
if($mpass==$mre_pass)
{
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


$sql = "select mid FROM singup where email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
 {
    echo "Already exist this Email id <br>"; 
	echo "Please Login OR Use a new Email id<br>"; 
	echo  "<br /><a href=singup.php><input type=button value=BACK></a>";
 }
else
{


$sql = "INSERT INTO singup (mname, email, mpass, mmobile) VALUES('$mname', '$email','$mpass', $mmobile)";

if ($conn->query($sql) === TRUE){
    echo "Account created successfully";
	echo "<br>Please Login<br>";
		 echo  "<br /><a href=login.php><input type=button value=Login></a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
}
}
else
{
	
	echo ("<br><font color=\"red\">Password Error Please Re-Enter Password</font>");
	echo  "<br /><a href=singup.php><input type=button value=BACK></a>";
}


?>


