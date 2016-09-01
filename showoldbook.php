<!DOCTYPE html>
<html>
<title>WWW.BOOKBEACHO.COM</TITLE>

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



  <!--select COLLEGE OR SCHOOL-->

<!-------search box is here..start--><BR />
 
 <br><br><br><br><br>
 <form action= "search.php" method ="post">
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <INPUT style="BORDER-RIGHT: #FA5858 8px solid; BORDER-TOP:#FA5858 8px solid;BORDER-left:#FA5858 8px solid;BORDER-bottom:#FA5858  8px solid; FONT-SIZE: 15pt;BORDER-RIGHT: #FA5858 8px solid; BORDER-BOTTOM: #FA5858  8px solid ; border-radius: 10px;"

onchange="n = 0;" size=112 name="string" placeholder=" &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp TYPE FULL BOOK AND WITH AUTHER NAME HERE" ></FONT><BR /><BR /><br>
&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <INPUT TYPE="SUBMIT" VALUE="SEARCH BOOK"  style="BORDER-RIGHT:#FA5858 3px solid #FA5858; BORDER-TOP:#FA5858    3px solid #FA5858;BORDER-left:#FA5858    3px solid #FA5858;BORDER-bottom:#FA5858  3px solid #FA5858;   FONT-SIZE: 15pt ">
  

 <body>  
<div class="wrapper">
 <DIV ID="SELECTCITY">
Category : <select name="parent_selection" id="parent_selection">
    
	<option value="">-- Please Select --</option>
	<option value="delhi">Delhi</option>
    <option value="saharanpur">SAHARANPUR</option>
    <option value="kanpur">KANPUR</option>
	<option value="please">None</option>
</select><BR><BR></DIV>
<DIV ID="TYPE">
 <select name="child_selection" id="child_selection"  >
</select>
</div>

 
   <BR /></DIV>

<BR> 
</P></FORM></DIV><BR>
<!-- /Search-->
<!---search box end...--->
 
<!------------------------->
 
<!--search by college name-->
  <meta charset='UTF-8' />
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script language="javascript" type="text/javascript">  
$(document).ready(function(){

//let's create arrays
var delhi = [
    
    {display: "P.G.D.A.V COLLEGE", value: "P.G.D.A.V COLLEGE" }, 
    {display: "P.G.D.A.V COLLEGE EVE", value: "P.G.D.A.V COLLEGE EVE" }, 
    {display: "Acharya Nerendra Dev college", value: "Acharya Nerendra Dev college" },
    {display: "Deshbhandhu College", value: "Deshbhandhu College" },
	{display: "Deshbhandhu College", value: "Deshbhandhu College" },
	{display: "P.G.D.A.V COLLEGE", value: "P.G.D.A.V COLLEGE" }, 
    {display: "P.G.D.A.V COLLEGE EVE", value: "P.G.D.A.V COLLEGE EVE" }, 
    {display: "Acharya Nerendra Dev college", value: "Acharya Nerendra Dev college" },
    {display: "Deshbhandhu College", value: "Deshbhandhu College" },
	{display: "Deshbhandhu College", value: "Deshbhandhu College" }
];
    
var saharanpur = [
    {display: "CHILKANA", value: "broccoli" }, 
    {display: "SULTANPUR", value: "cabbage" }, 
    {display: "PATNA", value: "carrot" },
    {display: "SARSAWA", value: "cauliflower" },
	{display: "Deshbhandhu College", value: "Deshbhandhu College" },
	{display: "P.G.D.A.V COLLEGE", value: "P.G.D.A.V COLLEGE" }, 
    {display: "P.G.D.A.V COLLEGE EVE", value: "P.G.D.A.V COLLEGE EVE" }, 
    {display: "Acharya Nerendra Dev college", value: "Acharya Nerendra Dev college" },
    {display: "Deshbhandhu College", value: "Deshbhandhu College" },
	{display: "Deshbhandhu College", value: "Deshbhandhu College" }
	];
    
var kanpur = [
    {display: "Frozen yogurt", value: "frozen-yogurt" }, 
    {display: "Booza", value: "booza" }, 
    {display: "Frozen yogurt", value: "frozen-yogurt" },
    {display: "Ice milk", value: "ice-milk" },
	{display: "Deshbhandhu College", value: "Deshbhandhu College" },
	{display: "P.G.D.A.V COLLEGE", value: "P.G.D.A.V COLLEGE" }, 
    {display: "P.G.D.A.V COLLEGE EVE", value: "P.G.D.A.V COLLEGE EVE" }, 
    {display: "Acharya Nerendra Dev college", value: "Acharya Nerendra Dev college" },
    {display: "Deshbhandhu College", value: "Deshbhandhu College" },
	{display: "Deshbhandhu College", value: "Deshbhandhu College" }];

   var please = [
{display: "None", value: " None" }
];
//If parent option is changed
$("#parent_selection").change(function() {
        var parent = $(this).val(); //get option value from parent 
        
        switch(parent){ //using switch compare selected option and populate child
              case 'delhi':
                list(delhi);
                break;
              case 'saharanpur':
                list(saharanpur);
                break;              
              case 'kanpur':
                list(kanpur);
                break; 
              case 'please':
                 list(please);	
                     break; 				 
            default: //default child option is blank
                $("#child_selection").html('');  
                break;
           }
});

//function to populate child select box
function list(array_list)
{
    $("#child_selection").html(""); //reset child options
    $(array_list).each(function (i) { //populate child options 
        $("#child_selection").append("<option value=\""+array_list[i].value+"\">"+array_list[i].display+"</option>");
    });
}

});
</script>

</head>



<?php

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

//post ad
$n=370;
$m=10;
$bbid= $_POST["string"];

$sql = "select * FROM post where ptype='oldbook'";
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
 FONT-SIZE: 15pt;
position: absolute;
background-color:#81F7F3;
left:470px;
top:$npx;
height:150px;
width:550px;"><br><br><br><br><br><br><br><br><br></a> ';
 echo '<dt> </dt><dd>'
     . '<img src="data:image/jpeg;base64,' . base64_encode($imageData) . '" width="150" height="150"  Style=" BORDER-RIGHT:#FA5858 3px solid #FA5858;
  
position: absolute;
background-color:#81F7F3;
left:300px;
top:mpx;
height:150px;
width:150px; >'
     . '</dd>';
 echo "</form>";
  
$n=$n+580;
$m=$m+580;
		 
     }
	 
}
 else {
     echo "<br><b>No Result Found<b><br>";
}

$conn->close();
?>  
 
 <?php
require 'include1.php';
require 'background.js';
?>
</BODY>
</html>
