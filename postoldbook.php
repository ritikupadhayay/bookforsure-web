<?php
session_start();
// Echo session variables that were set on previous page
$loginemail=  $_SESSION["email"];
if(isset($_POST['submit']) && $_FILES['userfile']['size'] > 0)
{
	
$id= $mid =$cat= $pname = $psprice = $pmprice = $condition = $pdesc = $sname = $semail = $smopile = $city= $college = $saddr = " ";
$ptype='Old Book';
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
$cat = $_POST['cat'];
$pname = $_POST['pname'];
$psprice = $_POST['psprice'];
$pmprice = $_POST['pmprice'];
$pcond = $_POST['pcond'];
$pdesc = $_POST['pdesc'];
$sname = $_POST['sname'];
$smobile = $_POST['smobile'];
$city= $_POST['city'];
$college= $_POST['college'];
$saddr = $_POST['saddr'];
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
//mid

$sql = "select mid FROM singup where email='$loginemail'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
            $id=  $row["mid"];
		 
		 
     }
} else {
     echo "Please Login";
}

 
//mid

$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}

	
$sql = "INSERT INTO post ( id, ptype, cat, pname, psprice, pmprice, pcond, pdesc, sname, semail, smobile, city, college, saddr, name, size, type, content) VALUES($id,'$ptype', '$cat', '$pname', $psprice, $pmprice, '$pcond', '$pdesc', '$sname', '$loginemail', $smobile, '$city', '$college', '$saddr', '$fileName', '$fileSize', '$fileType', '$content')";;



if ($conn->query($sql) === TRUE){
    echo "Post ad successfully....  ";
	echo "<br>File $fileName uploaded<br>";

echo "<br>You Ad is complete... Please click on Profile for check ad<br>";
		 echo  "<br /><a href=profile.php><input type=button value=Profile></a>";
		
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

?>
