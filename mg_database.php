<?php

$id= $college = $mgname = $mgsprice  = $mgcond =  $mgdesc = $mgsname = $mgsemail = $mgsmobile = $mgsaddr = " ";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
$college = $_POST['college'];
$mgname = $_POST['mgname'];
$mgsprice = $_POST['mgsprice'];
$mgcond = $_POST['mgcond'];
$mgdesc = $_POST['mgdesc'];
$mgsname = $_POST['mgsname'];
$mgsemail = $_POST['mgsemail'];
$mgsmobile = $_POST['mgsmobile'];
$mgsaddr = $_POST['mgsaddr'];
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

//mid....

$sql = "select mid FROM singup where email='$mgsemail'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
            $id=  $row["mid"];
		 
		 
     }
} else {
     echo "0 results";
}


//mid....





$sql = "INSERT INTO magazine(id, college, mgname, mgsprice, mgcond, mgdesc, mgsname, mgsemail, mgsmobile, mgsaddr) VALUES($id,'$college', '$mgname', $mgsprice, '$mgcond', '$mgdesc', '$mgsname', '$mgsemail', $mgsmobile, '$mgsaddr')";

if ($conn->query($sql) === TRUE){
    echo "Post ad successfully....  Please Upload Image...";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
<br>
<br>
 <!DOCTYPE HTML>
<HTML>
<link rel="stylesheet" href="OLDBOOK.CSS" />
<DIV ID="PHOTOUPLODE1">
<BR /><BR /><BR /><BR />
<form method="post" action="upload.php" enctype="multipart/form-data">
<table width="350" border="0" cellpadding="1" cellspacing="1" class="box">
<tr> 
<td width="246">
<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
 <input name="userfile" type="file" id="userfile"> 
</td>
<td width="80"><input name="upload" type="submit" class="box" id="upload" value=" Upload "></td>
</tr>
</table>
 </form>

 </DIV>
 </HTML>