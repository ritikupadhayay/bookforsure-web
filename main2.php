<!DOCTYPE html>
<html>
<title>WWW.BOOKBEACHO.COM</TITLE>

<!---add with css--->
<link rel="stylesheet" href="main.css" />
 
<!--close css-->
<HEAD>

<!--------Logo of website is here-->


<!---select city--->

	   
<A HREF="MAIN.PHP"> <DIV ID="HEADER"><H1>BOOKBECHO.COM</H1> </DIV></A>
<!-------LOGIN--->

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
&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp <a href=profile.php><input type=button value=Profile></a>";
	
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
<!---Youtube video box--->
<div id="youtube">
<iframe width="218" height="185"
src="http://www.youtube.com/embed/XGSy3_Czz8k">
</iframe>
</div>
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

<!---POST A ADD TO SELL A BOOK/NOTES/ETC///....--->

<DIV ID="FIRST1"><B>SELLBOOK OR ADVERTISE ANYTHING USING</b></DIV>
<?php 
session_start();

$chk=  $_SESSION["chk"];
if($chk==1)
{
	echo  '&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp <a href=postadd.php><input type=button value=Postadd style=BORDER-RIGHT:#FA5858 3px solid #FA5858; BORDER-TOP:#FA5858    3px solid #FA5858;BORDER-left:#FA5858    3px solid #FA5858;BORDER-bottom:#FA5858  3px solid #FA5858;   FONT-SIZE: 300pt ></a>';
}	
	else
	{
		echo  "    
&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  
&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  
&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  
&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp <a href=login.php><input type=button value=Postadd></a>";
     }

?>
 
<DIV ID="SCREENBOXS">
<DIV ID="FIRST2"><STRONG>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  To Buy or Find anything select an option below:</STRONG></DIV>
 <!---drect access icon to get books--->
<div id="sell1">
 <img src="old_books.png" alt="old_books" style="width:100px;height:100px">
  <DIV id="p1">OLD BOOKS</DIV>
<A HREF="">
<div id="sell2">
 <img src="classnotes.png" alt="classnotes" style="width:100px;height:100px">
  <div id="p2">CLASS NOTES</div>
</div></A>
<A HREF=""><div id="sell3">
 <img src="entrancebook.png" alt="entrancebook" style="width:100px;height:100px">
  <div id="p3">ENTRANCE BOOKS</div>
</div></A>
<A HREF=""><div id="sell4">
 <img src="exam_notes.png" alt="exam_notes" style="width:100px;height:100px" >
  <DIV id="p4">EXAM NOTES</DIV>
</div></A>
<A HREF=""><div id="sell5">
 <img src="new_books.png" alt="new_books" style="width:100px;height:100px" >
  <DIV id="p5">NEW BOOKS</DIV>
</div></A>
<A HREF=""><div id="sell6">
 <img src="pdf.png" alt="pdf" style="width:100px;height:100px" >
  <DIV id="p6">FREE BOOKS</DIV>
</div></A>
<A HREF=""><div id="sell7">
 <img src="Magazine.png" alt="Magazine" style="width:100px;height:100px" >
  <DIV id="p7">MAGAZINES</DIV>
</div></A>
<A HREF=""><div id="sell8">
 <img src="tution.png" alt="tution" style="width:100px;height:100px" >
  <DIV id="p7">COACHING</DIV>
</div></A>
</DIV>
</HEAD>

<BODY>
</div>
<?php
require 'include1.php';
require 'background.js';
?>
 
 
</BODY>
</html>

