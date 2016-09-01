<body>
<h1>Uploading Images to MySQL</h1><p>
<?php
if ( !isset($_FILES['userFile']['type']) ) {
   die('<p>No image submitted</p></body></html>');
}
?>
You submitted this file:<br /><br />
Temporary name: <?php echo $_FILES['userFile']['tmp_name'] ?><br />
Original name: <?php echo $_FILES['userFile']['name'] ?><br />
Size: <?php echo $_FILES['userFile']['size'] ?> bytes<br />
Type: <?php echo $_FILES['userFile']['type'] ?></p>

<?php
require '/home/mkg01/include/mysql.php';
// Validate uploaded image file
if ( !preg_match( '/gif|png|x-png|jpeg/', $_FILES['userFile']['type']) ) {
   die('<p>Only browser compatible images allowed</p></body></html>');
} else if ( strlen($_POST['altText']) < 9 ) {
   die('<p>Please provide meaningful alternate text</p></body></html>');
} else if ( $_FILES['userFile']['size'] > 16384 ) {
   die('<p>Sorry file too large</p></body></html>');
// Connect to database
} else if ( !($link=mysql_connect($host, $user, $passwd)) ) {
   die('<p>Error connecting to database</p></body></html>');
} else if ( !(mysql_select_db($dbName)) ) {
   die('<p>Error selecting database</p></body></html>');
// Copy image file into a variable
} else if ( !($handle = fopen ($_FILES['userFile']['tmp_name'], "r")) ) {
   die('<p>Error opening temp file</p></body></html>');
} else if ( !($image = fread ($handle, filesize($_FILES['userFile']['tmp_name']))) ) {
   die('<p>Error reading temp file</p></body></html>');
} else {
   fclose ($handle);
   // Commit image to the database
   $image = mysql_real_escape_string($image);
   $alt = htmlentities($_POST['altText']);
   $query = 'INSERT INTO image (type,name,alt,img) VALUES ("' . $_FILES['userFile']['type'] . '","' . $_FILES['userFile']['name']  . '","' . $alt  . '","' . $image . '")';
   if ( !(mysql_query($query,$link)) ) {
      die('<p>Error writing image to database</p></body></html>');
   } else {
      die('<p>Image successfully copied to database</p></body></html>');
   }
}
?>
</body>