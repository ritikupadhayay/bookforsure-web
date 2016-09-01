<!DOCTYPE html>
<html>

<!---add with css--->
<link rel="stylesheet" href="main.css" />
 


<!---POST A ADD TO SELL A BOOK/NOTES/ETC///....--->

<DIV ID="FIRST1"><B>SELLBOOK <br>OR<br> ADVERTISE ANYTHING USING <DIV ID="arrow">&#x21</DIV></b></DIV>


<!--- Premium Ads --->

<DIV ID="premium"><B><p>Premium Ads</p></b> </DIV><br>
<a href="premiumads.php"><DIV ID="pre"><b><p>Premium</p></b></DIV></a><br>
<a href="superpremiumads.php"><DIV ID="superpre"> <b><p>Super Premium</p></b></DIV></a><br>

<!--- Post buttion   -->
<?php 
session_start();

$chk=  $_SESSION["chk"];
if($chk==1)
{
	echo  ' <a href=postads.php><DIV ID="pab">Post Free Ads</DIV></a> ';
}	
	else
	{
		echo  '<a href="" onclick=login()><DIV ID="pab">Post Free Ads</DIV> </a>';
     }
	 


?>

<script>
function login() {
    window.open("login.php", "_blank", "toolbaar=no, minimize=no, scrollbars=1,resizable=no, top=70, left=500, width=400, height=400");
	
}
</script>

 
<DIV ID="SCREENBOXS">
<DIV ID="FIRST2"><STRONG>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  To Buy or Find anything select an option below:</STRONG></DIV>

 <!---drect access icon to get books--->
<div id="sell1"><a href="showoldbook.php">
 <img src="old_books.png" alt="old_books" style="width:100px;height:100px">
  <DIV id="p1">OLD BOOKS</a></DIV>
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

</div>
<?php
require 'include_2_hader.php';
require 'background.js';
require 'include1.php';
?>
</html>

