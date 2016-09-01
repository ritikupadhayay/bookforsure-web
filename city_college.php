 <div class="wrapper">
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <b>13. City : <select name="city" id="parent_selection">
    
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