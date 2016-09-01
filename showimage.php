<?php

$host="mysql.1freehosting.com";
$databasename="mydb";
$user="root";
$pass="ritik";
if ( !($link=mysql_connect($host, $user, $passwd)) ) {
   die('<p>Error connecting to database</p></body></html>');
} else if ( !(mysql_select_db($dbName)) ) {
   die('<p>Error selecting database</p></body></html>');
} else {
   $query = "SELECT images_id,images_path FROM images_tbl";
   if ( !($result = mysql_query($query,$link)) ) {
      die('<p>Error reading database</p></body></html>');
   } else {
      for ( $i = 0 ; $i < mysql_num_rows($result) ; $i++ ) {
        $row = mysql_fetch_assoc($result);
        echo '<img src="getImage.php?id=' . $row['images_id'] . '" images_path="' . $row['$target_path'] . ';
      }
   }
}
?>