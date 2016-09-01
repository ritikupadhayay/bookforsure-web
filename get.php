<?php
$host="mysql.1freehosting.com";
$databasename="mydb";
$user="root";
$passwd="ritik";
$link = mysql_connect($host, $user, $passwd);
mysql_select_db($databasename);
$query = 'SELECT type,img FROM upload WHERE id="' . $_GET['id'] . '"';
$result = mysql_query($query,$link);
$row = mysql_fetch_assoc($result);
header('Content-Type: ' . $row['type']);
echo $row['img'];
?>