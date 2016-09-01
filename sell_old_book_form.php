<!doctype html>
<title>BOOKFORSURE</TITLE><hr />
<DIV ID="HEADER"><H1>BOOKFORSURE</H1> </DIV>
<!-------LOGIN--->


<hr />
<link rel="stylesheet" href="main.css" />
<?php require 'background.js'; ?>
<!--FORM TO  add a book ...........--->
<html>

<FORM ID="ADDBOOK"> <BR />&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  
&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp <b>PLEASE FILL THESE REQUREMENTS.</b> <HR/> <hr /><BR /><BR />

<BR /> 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <B>1.SELECT CATOGRY:</B> &nbsp &nbsp &nbsp &nbsp <SELECT NAME="CATOGRY"><BR /> 
<option value="5STAR"><B>SCIENCE</B></option>
<option value="4STAR"><B>ART</B></option>
<option value="3STAR"><B>COMMERCE</B></option>
<option value="2STAR"><B>OTHER</B></option>
</SELECT><br /><br /><br />
&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <B>2.FULL BOOK NAME WITH AUTHOR NAME :<BR /><BR />
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <INPUT TYPE="TEXT" NAME="BOOK" size=90 REQUIRED> 
 <BR /><br /> <br /> 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <B>3. SELLING PRICE:</B>&nbsp &nbsp &nbsp &nbsp <INPUT TYPE="TEXT" NAME="SELLPRICE" REQUIRED>
&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp <B>4.MARKIT PRICE:</B> &nbsp &nbsp &nbsp &nbsp &nbsp <INPUT TYPE="TEXT" NAME="BOOK"><BR /> <br /> <br /> 
<hr /><hr /><br />
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <B>5. CONDITION:</B>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp &nbsp  <select name="condition" REQUIRED><br /><BR /><BR />
<option value ="GOOD"><B>GOOD</B></option>
<option value="BAD"><B>BAD</B></option>
<option value="NORMAL"><B>NORMAL</B></option>
 </SELECT>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <b>6.GIVE STAR:</b>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp <select name="condition">
<option value="5STAR"><B>&nbsp @@@@@ &nbsp </B></option>
<option value="4STAR"><B> &nbsp @@@@ &nbsp </B></option>
<option value="3STAR"><B>&nbsp @@@ &nbsp </B></option>
<option value="2STAR"><B>&nbsp @@ &nbsp </B></option>
<option value="1STAR"><B>&nbsp &nbsp @ &nbsp &nbsp </B></option>
</SELECT><br /> <br /> <br /> <hr /> <hr /><br />
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <B>7.ISBN NO:</B>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <INPUT TYPE="TEXT" NAME="ISBN" >
 <BR /><br /> <br /> 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <b>9.UPLOAD PHOTO:</b><INPUT TYPE="FILE" NAME="BOOKPHOTO1" VALUE="Select book photo"><br/><br /><br />
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <b>10.UPLOAD PHOTO:</b><INPUT TYPE="FILE" NAME="BOOKPHOTO2" VALUE="Select book photo"><BR /><BR /><BR /><BR /><BR />
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <b>11.ABOUT BOOK</B> <br /><br />

&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
 <TEXTAREA name="aboutbook" rows="7" cols="60" REQUIRED>Write some text about the book here.</TEXTAREA><BR /><BR /><HR /><HR />
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <b>12.SELLER NAME:</b><INPUT TYPE="TEXT" NAME="SELLERNAME" VALUE="TYPE YOUR NAME HERE" REQUIRED><BR /><BR /><BR /><BR /><BR />
 <BR />
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <B>14.PHONE NO:</B><INPUT TYPE="NUMBER" NAME="CONTECTINFO1" REQUIRED><BR /><BR /><BR />
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <B>15.EMAIL ID:</B><INPUT TYPE="EMAIL" NAME="COSEMAIL"><BR /><BR />
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <B>16.SELECT COLLEGE NAME :</B><BR /><BR />
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <select name="college names" REQUIRED>
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
			  <option value="Zakir Hasain post Graduate Evenning College"> 16.   ZAKIR HASAIN POST GRAUATE EVENNING COLLEGE</option>
			  <option value="Vivekananda College">17.  VIVEKANANDA COLLEGE</option>
			  <option value="Valllabhbhai patel chest Institute">18.  KAMALA NEHRU COLLEGE</option>
			  <option value="Sri Guru Teg Bahadur Khalsa College ">19. SRI GURU TEG BAHADUR KHALSA  COLLEGE</option>
			  <option value="Shivaji College">20.  SHIVAJI COLLEGE</option>
			  <option value="Shaheed Bhagat Singh College">21.  SHAHEED BHAGAT SINGH COLLEGE</option>
			  <option value="Satyawati College">22.  SATYAWATI COLLEGE</option>
			  <option value="Satyawati College Eve">23.  SATYAWATI COLLEGE EVE.</option>
			  </select><BR /><BR /><BR />
			  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <b>17:ADDRESS:<TEXTAREA rows="7" cols="60" REQUIRED>PLEASE TYPE YOUR ADDRESS HERE</TEXTAREA></b><BR /><BR /><BR/>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <input type="submit" name="submit" value=" &nbsp SELL &nbsp" ><BR /><BR />
</FORM>

</html>