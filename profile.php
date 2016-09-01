<!DOCTYPE html>
<html>
<title>BOOKFORSURE</TITLE>

<!---add with css--->
<link rel="stylesheet" href="main.css" />
 
<!--close css-->
<HEAD>

<!--------Logo of website is here-->


<!---select city--->

	   
<A HREF="MAIN.PHP"> <DIV ID="HEADER"><H1>BOOKFORSURE</H1> </DIV></A>

<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
// Echo session variables that were set on previous page
$loginemail=  $_SESSION["email"];

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

$sql = "select mname FROM singup where email='$loginemail'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
		 $name=$row["mname"];
		 
		 
     }
}
?>



<!---  login/singup buttion  -->


<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();

$chk=  $_SESSION["chk"];


if("$chk"==1)

{

	echo  " &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  
&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  
&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  
&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  
&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  
&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  
&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp   &nbsp $name  <a href=profile.php><input type=button value=Profile></a>";
	
}
else
{
	echo  " &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  
&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  
&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  
&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  
&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  
&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  
&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp <a href=login.php><input type=button value=Login></a> &nbsp  &nbsp <a href=singup.php><input type=button value=Singup></a>";
}
	


?>

<br><br>

 

</head>


<?php
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

$sql = "select * FROM singup where email='$loginemail'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         
		 $mname=$row["mname"];
		 
		 $email=$row["email"];
		 $mmobile=$row["mmobile"];
		 
		 echo  '  <input type="hidden" name="id" value=" "/>
 <input type=submit  value= "Name: '. $mname.'
 
 Email: '.$email.' 
 
 Mobile No. : ' .$mmobile.'   "   
 Style=" BORDER-RIGHT:#FA5858 3px solid #FA5858;
 BORDER-TOP:#FA5858    3px solid #FA5858;
 BORDER-left:#FA5858    3px solid #FA5858;
 BORDER-bottom:#FA5858  3px solid #FA5858;   
 FONT-SIZE: 12pt;
position: absolute;
background-color:#81F7F3;
left:470px;
height:100px;
width:550px;"><br><br><br><br><br><br><br></a> ';
		 
		 
     }
	echo  '  <input type="hidden" name="id" value=" "/>
 <input type=submit  value= " Here Are Your Ads "   
 Style="FONT-SIZE: 25pt;
position: absolute;
background-color:#81F7F3;
left:250px;
height:40px;
width:900px;"><br><br><br><br><br><br><br></a> ';
	 
	 $sql = "select * FROM post where semail='$loginemail'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
      while($row = $result->fetch_assoc()) 
	 {
		 $pname=$row["pname"];
		 $pid=$row["pid"];
		 $ptype=$row["ptype"];
		 $cat=$row["cat"];
		 $pcond=$row["pcond"];
		 $psprice=$row["psprice"];
		  $imageData=$row["content"];
		 
	

echo'<form action="detail.php" method="post">';

 echo  '  <input type="hidden" name="id" value="' . $pid . '"/>
 <input type=submit  value= "'. $pname.'
 
 Price: '.$psprice.' ,  Condition: '.$pcond.'
 
 Type: ' .$ptype.' ,  Category: '.$cat.' "   
 Style=" BORDER-RIGHT:#FA5858 3px solid #FA5858;
 BORDER-TOP:#FA5858    3px solid #FA5858;
 BORDER-left:#FA5858    3px solid #FA5858;
 BORDER-bottom:#FA5858  3px solid #FA5858;   
 FONT-SIZE: 12pt;
position: absolute;
background-color:#81F7F3;
left:470px;
top:$npx;
height:100px;
width:550px;"><br><br><br><br><br></a> ';


 echo "</form>";
		 
$bbid=$row["pid"];
		 
		  //show book action bittion
		  
		  echo '<form action="drop.php" method="post">';
		  
		  echo  '<td><input type="hidden" name="id" value="' . $bbid . '"/><input type="submit" value="Delete"  Style=" BORDER-RIGHT:#FA5858 3px solid #FA5858;
 BORDER-TOP:#FA5858    3px solid #FA5858;
 BORDER-left:#FA5858    3px solid #FA5858;
 BORDER-bottom:#FA5858  3px solid #FA5858;   
 FONT-SIZE: 12pt;
position: absolute;

left:900px;
top:$npx;
height:30px;
width:120px;"><br><br><br><br><br></td>';
	 
		 echo "</form>";
		 
		 
     }
	 echo  '<br><br><br><b> ><input type=button onclick=logout() value=Logout Style=" BORDER-RIGHT:#FA5858 3px solid #FA5858;
 BORDER-TOP:#FA5858    3px solid #FA5858;
 BORDER-left:#FA5858    3px solid #FA5858;
 BORDER-bottom:#FA5858  3px solid #FA5858;   
 FONT-SIZE: 12pt;
position: absolute;

left:650px;

height:40px;
width:150px;"></a>';
	 
	 
} else {
      echo  '<br><br><br><b> <input type=button onclick=logout() value=Logout Style=" BORDER-RIGHT:#FA5858 3px solid #FA5858;
 BORDER-TOP:#FA5858    3px solid #FA5858;
 BORDER-left:#FA5858    3px solid #FA5858;
 BORDER-bottom:#FA5858  3px solid #FA5858;   
 FONT-SIZE: 12pt;
position: absolute;

left:650px;

height:40px;
width:150px;"></a>';
}
	 
} else {
     echo "You are Logout......";
         
		 echo  "<br /><br><br><a href=login.php><input type=button value=Login></a>";
}
//post ad




$conn->close();

require 'include1.php';
require 'background.js';
?>

<script>
function logout() {
    window.open("logout.php", "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=70, left=500, width=400, height=400");
}

</script>
</BODY>
</html>
