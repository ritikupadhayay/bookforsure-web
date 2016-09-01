

<!DOCTYPE html>
<html>

<?php

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
$n=370;
$m=10;
$i=1;
$bbid= $_POST["string"];

$sql = "select * FROM post where pname like '%%$bbid%%' LIMIT 5 OFFSET 15 ";
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
left:420px;
top:$npx;
height:100px;
width:550px;"><br><br><br><br><br><br></a> ';
 echo "</form>";
  
$n=$n+580;
$m=$m+580;
		 
		 
		

 if($i==5)
 {
	echo"$i";
		 echo  ' <b><a href=search_page2.php><input type=button value="Next Page" Style=" BORDER-RIGHT:#FA5858 3px solid #FA5858;
 BORDER-TOP:#FA5858    3px solid #FA5858;
 BORDER-left:#FA5858    3px solid #FA5858;
 BORDER-bottom:#FA5858  3px solid #FA5858;   
 FONT-SIZE: 12pt;
position: absolute;

left:850px;
top:950px;
height:30px;
width:120px;"></a>';
 }
 $i++;
		 
     }
	 
}
 else {
     echo "<br><b>No Result Found<b><br>";
}

$conn->close();
?>  
 
<?php
require 'include_2_hader.php';
require 'background.js';
require 'include1.php';
?>
</BODY>
</html>
