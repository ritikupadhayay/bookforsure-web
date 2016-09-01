<!doctype html>
<html>
<!-------LOGIN--->

<LINK REL="STYLESHEET" HREF="oldbook.css" />
<!--FORM TO  add a book ...........--->
<DIV ID="ADDBOOK">
<fieldset>
<FORM  method="POST" action="postentrancebook.php" enctype="multipart/form-data"> <BR /><div id="TEXT1">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <b>PLEASE FILL THESE REQUREMENTS.</b></DIV> <HR/> <hr />
 <h3 style="color:red;">Enter Book Information:---</h3><br/>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <b>1. SELECT CATOGRY: </b> &nbsp &nbsp &nbsp <SELECT NAME="cat"><BR /> 
<option value="SCIENCE"><B>SCIENCE</B></option>
<option value="ART"><B>ART</B></option>
<option value="COMMERCE"><B>COMMERCE</B></option>
<option value="OTHER"><B>OTHER</B></option>
</SELECT><br /><br /><br />
&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp <B>2. FULL BOOK NAME:&nbsp &nbsp &nbsp &nbsp </B><INPUT TYPE="TEXT" NAME="pname"  size=45>  
 <BR /><br /> <br /> 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <B> 3. SELLING PRICE:</B>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <INPUT TYPE="TEXT" NAME="psprice" size=7>
&nbsp &nbsp <B>4. MARKIT PRICE:</B>  &nbsp  <INPUT TYPE="TEXT" NAME="pmprice" size=7 ><BR /> <br /> <br /> 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <B>5. CONDITION:</B>   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp &nbsp  <select name="pcond"><br /><BR /><BR />
<option value ="GOOD"><B>GOOD</B></option>
<option value="BAD"><B>BAD</B></option>
<option value="NORMAL"><B>NORMAL</B></option>
</select><br/>

<br/>
<b><div ID="ABOUTBOOK"> 6. ABOUT BOOK</div></B>
  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  <TEXTAREA name="pdesc" rows="7" cols="40"  placeholder="Write some text about the book here." ></TEXTAREA><BR /><BR />
 <!---To uploade photo---><BR><BR>

&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <B>7.UPLOAD PHOTO: </B>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
 <input name="userfile" type="file" id="userfile"><BR><BR>
 <h3 style="color:red;">Enter Saller Information :---</h3><br>

 
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <b>8. SELLER NAME:</b>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <INPUT TYPE="TEXT" NAME="sname"><BR /><BR /><BR />
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <B>9. PHONE NO:</B>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <INPUT TYPE="NUMBER" NAME="smobile" ><BR /><BR />
 
  
 <BR>
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <B>10. EMAIL ID:</B> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <?php session_start(); $loginemail=  $_SESSION["email"]; echo "$loginemail";?><BR /><BR /><BR />
 <br>
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <b>11. SELECT COLLEGE/SCHOOL:</b>&nbsp &nbsp &nbsp &nbsp &nbsp <SELECT NAME="TYPE">

<OPTION VALUE="SCHOOL">SCHOOL</OPTION>
<OPTION VALUE="COLLEGE">COLLEGE</OPTION>
<OPTION VALUE="NONE">NONE</OPTION>
</SELECT>

 <br /><br><br>
 
 <div class="wrapper">
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <b>12. City : <select name="city" id="parent_selection">
    
	<option value="">-- Please Select --</option>
	<option value="delhi">DELHI*</option>
	 <option value="GHAZIABAD">GHAZIABAD</option>
    <option value="saharanpur">SAHARANPUR</option>
    <option value="kanpur">KANPUR</option>
	
	<option value="please">None</option>
</select></b>&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
 <b>College : <select name="college" id="child_selection"  >
</select></b>


 
  </DIV>

<BR><br>

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
 
 
 
			  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <b><DIV ID="ADDRESS">13. ADDRESS:</DIV>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <TEXTAREA name="saddr" rows="7" cols="40" placeholder="PLEASE TYPE YOUR ADDRESS HERE"></TEXTAREA></b><BR /><BR /><BR/>
 <input type="submit" name="submit" id="submit" value="Becho Book" style="POSITION:ABSOLUTE; left:270px; width:130px; height:50px; font-size:15pt; background-color:#FFFF00; "><BR /><BR />


<br/><br/>
</FORM>
</fieldset>
</DIV>

</html>





