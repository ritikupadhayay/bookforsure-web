<?php
$bname=null;
$id= $cat= $college = $cnname = $cnsprice  = $cncond =  $cndesc = $cnsname = $cnsemail = $cnsmobile = $cnsaddr = " ";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
$cat = $_POST['cat'];
$college = $_POST['college'];
$cnname = $_POST['cnname'];
$cnsprice = $_POST['cnsprice'];
$cncond = $_POST['cncond'];
$cndesc = $_POST['cndesc'];
$cnsname = $_POST['cnsname'];
$cnsemail = $_POST['cnsemail'];
$cnsmobile = $_POST['cnsmobile'];
$cnsaddr = $_POST['cnsaddr'];
}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

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

$sql = "select mid FROM singup where email='$cnsemail'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
            $id=  $row["mid"];
		 
		 
     }
} else {
     echo "0 results";
}

 
//mid

$sql = "INSERT INTO cn_notes(id, cat, college, cnname, cnsprice, cncond, cndesc, cnsname, cnsemail, cnsmobile, cnsaddr) VALUES($id,'$cat','$college', '$cnname', $cnsprice, '$cncond', '$cndesc', '$cnsname', '$cnsemail', $cnsmobile, '$cnsaddr')";

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