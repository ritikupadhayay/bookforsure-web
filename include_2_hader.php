<!doctype html>
<html>

<link rel="stylesheet"  href="main.css" />

 
<b>

 
<script>

var text='<text ID="W2"><b><i> &nbsp &nbsp &nbsp &nbsp &nbsp BECHOBOOK.COM  </i></b></text>'// YOUR TEXT

var speed=10 // SPEED OF FADE

// ********** LEAVE THE NEXT BIT ALONE!


if (document.all||document.getElementById){
document.write('<span id="highlight">' + text + '</span>')
var storetext=document.getElementById? document.getElementById("highlight") : document.all.highlight
}
else
document.write(text)
var hex=new Array("00","14","28","3C","50","64","78","8C","A0","B4","C8","DC","F0")
var r=1
var g=1
var b=1
var seq=1
function changetext(){
rainbow="#"+hex[r]+hex[g]+hex[b]
storetext.style.color=rainbow
 
}
function change(){
if (seq==6){
b--
if (b==0)
seq=1
}
if (seq==5){
r++
if (r==12)
seq=6
}
if (seq==4){
g--
if (g==0)
seq=5
}
if (seq==3){
b++
if (b==12)
seq=4
}
if (seq==2){
r--
if (r==0)
seq=3
}
if (seq==1){
g++
if (g==12)
seq=2
}
changetext()
}
function starteffect(){
if (document.all||document.getElementById)
flash=setInterval("change()",speed)
}
starteffect()
</script>
</b>

<style>
text{
	POSITION: ABSOLUTE;
    font-family: "Verdana Bold Italic";
	left:360px;
	background-color:white;
	padding:5px;
	width:580px;
	border:3px solid #A9F5F2;
	TOP:5px;
	FONT-SIZE: 30pt;
}
</style>
   <form action= "search.php" method ="GET">
<div class="wrapper">
 <DIV ID="SELECTCITY">
<b>Category : <select name="city" id="parent_selection">
    
	<option value="">-- Please Select --</option>
	<option value="delhi">DELHI*</option>
	 <option value="GHAZIABAD">GHAZIABAD</option>
    <option value="saharanpur">SAHARANPUR</option>
    <option value="kanpur">KANPUR</option>
	
	<option value="please">None</option>
</select><BR><BR></b></DIV>
<DIV ID="TYPE">
 <b>College : <select name="college" id="child_selection"  >
</select></b>
</div>

 
  </DIV>

</P></DIV><BR>
<!-- /Search-->
<!---search box end...--->
 
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


<!-------search box is here..start--><BR />
 
 <br><br><br><b>

 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <INPUT style="BORDER-RIGHT: #FA5858 8px solid; BORDER-TOP:#FA5858 8px solid;BORDER-left:#FA5858 8px solid;BORDER-bottom:#FA5858  8px solid; position: absolute; TOP: 140PX; width:1050px; FONT-SIZE: 15pt;BORDER-RIGHT: #FA5858 8px solid; BORDER-BOTTOM: #FA5858  8px solid ; border-radius: 10px;"

onchange="n = 0;" name="search" placeholder="   &nbsp  TYPE FULL BOOK AND WITH AUTHER NAME HERE " ></FONT><BR /><BR /><br>
&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </b><INPUT TYPE="SUBMIT" VALUE="SEARCH BOOK"  style=" BORDER-RIGHT:#FA5858 3px solid #FA5858; BORDER-TOP:#FA5858    3px solid #FA5858;BORDER-left:#FA5858    3px solid #FA5858;BORDER-bottom:#FA5858  3px solid #FA5858;  position: absolute; TOP: 190PX; FONT-SIZE: 15pt ">
  
</form>

</html>