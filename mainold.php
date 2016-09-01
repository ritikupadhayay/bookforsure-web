<!doctypehtml>
<html>
<title>WWW.BOOKBEACHO.COM</TITLE>

<!---add with css--->
<link rel="stylesheet" href="main.css" />
 
<!--close css-->
<HEAD>
<!--------Logo of website is here-->
<select name="CITY" ID="CITY">
   <option value ="DELHI"><STRONG>1.DELHI</STRONG> 
   </option>
      <option value ="SAHARANPUR"><STRONG>2.SAHARANPUR</STRONG> 
	  </option>
	   </SELECT>
<A HREF="MAIN.PHP"> <DIV ID="HEADER"><H1>BOOKBECHO.COM</H1> </DIV></A>
<!-------LOGIN--->

<!--<a href="login.PHP"><DIV ID="LOGIN"><b>LOGIN</b></DIV></a>


<a href="singup.php"><DIV ID="SIGNUP"><strong>SIGNUP</strong></DIV></a>
-->
<BR /><BR />

<?php

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
<!---background-->
<hr />

<!-------search box is here..start-->
 <form action="search.php" method="post">
<FONT SIZE=4 COLOR="RED"> SEARCH BOOK :</FONT> 
<INPUT style="BORDER-RIGHT: black 3px solid; BORDER-TOP:black    3px solid; FONT-SIZE: 15pt; BORDER-LEFT: black  3px solid; BORDER-BOTTOM: black  3px solid" 
onchange="n = 0;" size=120 name="string" placeholder="TYPE FULL BOOK AND WITH AUTHER NAME HERE" REQURED></FONT><BR>
<br /><br /><INPUT TYPE="SUBMIT" VALUE="SEARCH BOOK">
<!---<INPUT style="BORDER-LEFT: #ffffff 4px solid; BORDER-TOP: #ffffff 4px solid; FONT-SIZE: 12pt; BORDER-RIGHT: #ffffff 4px solid; BORDER-BOTTOM: #ffffff 4px solid; FONT-FAMILY: Tahoma; BACKGROUND-COLOR:#58FAF4 " type="submit" name="su value=SEARCHBOOK">
<center><font size=5pt;><font family=Times New Roman;><b>--->


 </form>

<BR> 
</P></FORM></DIV><BR>
<!-- /Search-->
<!---search box end...--->
<!--search by college name-->
SEARCH BY COLLEGE NAME:

 <select name="college names">
   <option value ="P.G.D.A.V COLLEGE"><STRONG>1.P.G.D.A.V COLLEGE,NEHRU NAGAR.</STRONG> </option>
   <option value="P.G.D.A.V COLLEGE EVE">2.P.G.D.A.V COLLEGE(EVE.)</option>
    <option value="Acharya Nerendra Dev college">3.ACHARYA NERENDRA DEV COLLEGE</option>
	 <option value="Deshbhandhu College">4.DESHBHANDU COLLEGE</option>
	  <option value="Dyal Singh College">5.  DYAL SINGH COLLEGE</option>
	   <option value="Gargi college">6.  GARGI COLLEGE</option>
	    <option value="Hindu College">7.  HINDU COLLEGE</option>
		 <option value="Kamala Nehru College">8. KAMALA NEHRU COLLEGE</option>
		 <option value="kalindi College">9.  KALINDI COLLEGE</option>
		  <option value="Lady Shri Ram College">10.  LADY SHRI RAM COLLEGE</option>
		   <option value="Miranda House">11.  MIRANDA HOUSE</option>
		    <option value="Rajdhani College"> 12.  RAJDHANI COLLEGE</option>
			 <option value="Ramanujan College">13.  RAMANJAN COLLEGE</option>
			  <option value="Shyama Prasdad Mukherji College for Woman">14.SHYAMA PRASDAD MUKHERJI COLLEGE FOR WOMAN </option>
			  <option value="ST. Stephen's College">15.  ST. STEPHEN'S COLLEGE</option>
			  <option value="Zakir Hasain post Graduate Evenning College"> 16.ZAKIR HASAIN POST GRAUATE EVENNING COLLEGE</option>
			  <option value="Vivekananda College">17.  VIVEKANANDA COLLEGE</option>
			  <option value="Valllabhbhai patel chest Institute">18.  KAMALA NEHRU COLLEGE</option>
			  <option value="Sri Guru Teg Bahadur Khalsa College ">19. SRI GURU TEG BAHADUR KHALSA  COLLEGE</option>
			  <option value="Shivaji College">20.  SHIVAJI COLLEGE</option>
			  <option value="Shaheed Bhagat Singh College">21.  SHAHEED BHAGAT SINGH COLLEGE</option>
			  <option value="Satyawati College">22.  SATYAWATI COLLEGE</option>
			  <option value="Satyawati College Eve">23.  SATYAWATI COLLEGE EVE.</option>
		 
   </select>
   
<!---POST A ADD TO SELL A BOOK/NOTES/ETC///....--->

<DIV ID="FIRST1"><B>SELLBOOK OR ADVERTISE ANYTHING USING</b></DIV>
<A HREF="POSTADD.PHP"><div id="POSTFREEADDBOX"><STRONG>  <P>  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp POST FREE AD</P></STRONG></DIV></A>
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