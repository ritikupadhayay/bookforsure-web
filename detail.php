<!DOCTYPE html>
<html>
<title>BOOKFORSURE</TITLE>


<?php

echo  '<input type="hidden" name="id" value="  "/>
 <input type=submit  value= "Post Details"   
 Style=" BORDER-RIGHT:#FA5858 3px solid #FA5858;
 BORDER-TOP:#FA5858    3px solid #FA5858;
 BORDER-left:#FA5858    3px solid #FA5858;
 BORDER-bottom:#FA5858  3px solid #FA5858;   
 FONT-SIZE: 20pt;
position: absolute;
background-color:#FFFF00;
left:250px;
top:30px;
height:50px;
width:770px;"><br><br><br><br><br></a> ';

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

//post ad

$bbid= $_POST["id"];

$sql = "select * FROM post where pid=$bbid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
		  $imageData=$row["content"];
		  $pname=$row["pname"];
		 $pid=$row["pid"];
		 $ptype=$row["ptype"];
		 $cat=$row["cat"];
		 $pcond=$row["pcond"];
		 $psprice=$row["psprice"];
		 $pmprice=$row["pmprice"];
		 $pdesc=$row["pdesc"];
		 $pdate=$row["pdate"];
		 $sname=$row["sname"];
		 $semail=$row["semail"];
		 $smobile=$row["smobile"];
		 $city=$row["city"];
		 $college=$row["college"];
		 $saddr=$row["saddr"];
		  
		  
	 echo '<dt> </dt><dd>'
     . '<img src="data:image/jpeg;base64,' . base64_encode($imageData) . '" width="120" height="200" Style=" BORDER-RIGHT:#FA5858 3px solid #FA5858;
 BORDER-TOP:#FA5858    3px solid #FA5858;
 BORDER-left:#FA5858    3px solid #FA5858;
 BORDER-bottom:#FA5858  3px solid #FA5858;   
 FONT-SIZE: 12pt;
position: absolute;
background-color:#81F7F3;
left:320px;
top:120px;
height:250px;
width:250px;">'
     . '</dd> ';
		  
		  
        echo  '  <input type="hidden" name="id" value="' . $pid . '"/>
 <input type=submit  value= "'. $pname.'
 
 Selling Price: '.$psprice.' ,  Market Price: '.$pmprice.'
 
 Condition: '.$pcond.'
 
 Date: '.$pdate.'
 
 Type: ' .$ptype.' ,  Category: '.$cat.'

City: '.$city.' , College: '.$college.'" 
 Style=" BORDER-RIGHT:#FA5858 3px solid #FA5858;
 BORDER-TOP:#FA5858    3px solid #FA5858;
 BORDER-left:#FA5858    3px solid #FA5858;
 BORDER-bottom:#FA5858  3px solid #FA5858;   
 FONT-SIZE: 12pt;
position: absolute;
background-color:#81F7F3;
left:620px;
height:300px;
width:400px;"><br><br><br><br><br></a> ';


		 
		 echo  '  <input type="hidden" name="id" value="' . $pid . '"/>
 <input type=submit  value= "Post Description: '. $pdesc.' "   
 Style=" BORDER-RIGHT:#FA5858 3px solid #FA5858;
 BORDER-TOP:#FA5858    3px solid #FA5858;
 BORDER-left:#FA5858    3px solid #FA5858;
 BORDER-bottom:#FA5858  3px solid #FA5858;   
 FONT-SIZE: 12pt;
position: absolute;
background-color:#81F7F3;
left:250px;
top:410px;
height:150px;
width:770px;"><br><br><br><br><br></a> ';


echo  '  <input type="hidden" name="id" value=" ' . $pid . '"/>
 <input type=submit  value= "Seller Information "   
 Style=" BORDER-RIGHT:#FA5858 3px solid #FA5858;
 BORDER-TOP:#FA5858    3px solid #FA5858;
 BORDER-left:#FA5858    3px solid #FA5858;
 BORDER-bottom:#FA5858  3px solid #FA5858;   
 FONT-SIZE: 20pt;
position: absolute;
background-color:#FFFF00;
left:250px;
top:570px;
height:50px;
width:770px;"><br><br><br><br><br></a> ';

echo  '  <input type="hidden" name="id" value=" ' . $pid . '"/>
 <input type=submit  value= "Saller Name: '. $sname.'
 
 Seller Email id: '.$semail.'
 
 Seller Mobile No. : '.$smobile.'
 
 Seller Address:  '.$saddr.' "   
 Style=" BORDER-RIGHT:#FA5858 3px solid #FA5858;
 BORDER-TOP:#FA5858    3px solid #FA5858;
 BORDER-left:#FA5858    3px solid #FA5858;
 BORDER-bottom:#FA5858  3px solid #FA5858;   
 FONT-SIZE: 12pt;
position: absolute;
background-color:#81F7F3;
left:250px;
top:630px;
height:200px;
width:770px;"><br><br><br><br><br></a> ';

		 
     }
	 
	 
} else {
     echo "<br><b>No Book Ad Post<b><br>";
}

$conn->close();
?>  

 <?php
require 'include1.php';
require 'background.js';
?>
</BODY>
</html>