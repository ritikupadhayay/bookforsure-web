
 <?php
$id= $mid=$cat= $college= $pname = $psprice = $pmprice = $condition = $pstar = $pispn_no = $pdesc = $sname = $semail = $smopile = $saddr = " ";
$ptype='oldbook';
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
$cat = $_POST['cat'];
$college = $_POST['college'];
$pname = $_POST['pname'];
$psprice = $_POST['psprice'];
$pmprice = $_POST['pmprice'];
$pcond = $_POST['pcond'];
$pstar = $_POST['pstar'];
$pisbn_no = $_POST['pisbn_no'];
$pdesc = $_POST['pdesc'];
$sname = $_POST['sname'];
$semail = $_POST['semail'];
$smobile = $_POST['smobile'];
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

$sql = "select mid FROM singup where email='$semail'";
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


$sql = "INSERT INTO post ( id,ptype, cat, college, pname, psprice, pmprice, pcond, pstar, pisbn_no, pdesc, sname, semail, smobile, saddr) VALUES($id,'$ptype', '$cat','$college', '$pname', $psprice, $pmprice, '$pcond', $pstar, '$pisbn_no', '$pdesc', '$sname', '$semail', $smobile, '$saddr')";;

if ($conn->query($sql) === TRUE){
    echo "Post ad successfully....  Please Upload Image...";
		
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

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