<?php
require '/home/mkg01/include/mysql.php';
$link = mysql_connect($host, $user, $passwd);
mysql_select_db($dbName);
$query = 'SELECT type,img FROM image WHERE id="' . $_GET['id'] . '"';
$result = mysql_query($query,$link);
$row = mysql_fetch_assoc($result);
header('Content-Type: ' . $row['type']);
echo $row['img'];
?>