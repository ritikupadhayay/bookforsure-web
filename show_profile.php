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
echo '<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  </head>

  <body>
    <div class="container">                                        
      <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" Style=" 
		BORDER-RIGHT:#FA5858 3px solid #FA5858;
 BORDER-TOP:#FA5858    3px solid #FA5858;
 BORDER-left:#FA5858    3px solid #FA5858;
 BORDER-bottom:#FA5858  3px solid #FA5858;  
background-color:#FFFF00; 
 FONT-SIZE: 15pt;
position: absolute;
left:910px;
top:10px;
height:35px;
width:160px;
		">'.$name .'
        <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1"  Style=" 
		BORDER-RIGHT:#FA5858 3px solid #FA5858;
 BORDER-TOP:#FA5858    3px solid #FA5858;
 BORDER-left:#FA5858    3px solid #FA5858;
 BORDER-bottom:#FA5858  3px solid #FA5858;  
background-color:#FFFF00; 
 FONT-SIZE: 15pt;
position: absolute;
left:910px;
top:50px;
height:140px;
width:83px;
		">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="profile.php">Profile</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="update_profile.php">Update Profile</a></li>
          
          <li role="presentation" class="divider"></li>
          <li role="presentation"><a role="menuitem" tabindex="-1"href="" onclick=logout() value=Logout>Logout</a></li>
        </ul>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>';
	
	
}
else
{

echo '<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  </head>

  <body>
    <div class="container">                                        
      <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" Style=" 
		BORDER-RIGHT:#FA5858 3px solid #FA5858;
 BORDER-TOP:#FA5858    3px solid #FA5858;
 BORDER-left:#FA5858    3px solid #FA5858;
 BORDER-bottom:#FA5858  3px solid #FA5858;  
background-color:#FFFF00; 
 FONT-SIZE: 15pt;
position: absolute;
left:910px;
top:10px;
height:35px;
width:160px;
		">Login/Signup
        <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1"  Style=" 
		BORDER-RIGHT:#FA5858 3px solid #FA5858;
 BORDER-TOP:#FA5858    3px solid #FA5858;
 BORDER-left:#FA5858    3px solid #FA5858;
 BORDER-bottom:#FA5858  3px solid #FA5858;  
background-color:#FFFF00; 
 FONT-SIZE: 15pt;
position: absolute;
left:910px;
top:50px;
height:80px;
width:83px;
		">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="" onclick=login() value=Login >Login</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="" onclick=singup() value=Sign up >Sign up</a></li>
        </ul>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>';
	
	
}



	
?>
<script>
function login() {
    window.open("login.php", "_blank", "toolbaar=no, minimize=no, scrollbars=1,resizable=no, top=70, left=500, width=400, height=400");
	
}

function singup() {
    window.open("singup.php",  "_blank", "toolbar=no, status=yes ,menubar=no,location=no scrollbars=no, resizable=no, top=70, left=500, width=400, height=400");
}
function logout() {
    window.open("logout.php",  "_blank", "toolbar=no, status=yes ,menubar=no,location=no scrollbars=no, resizable=no, top=70, left=500, width=400, height=400");
}

</script>