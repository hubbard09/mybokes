<?php
include "conn.php";
$sql = "select * from template where display = 'T'";
$query = mysql_query($sql);
$row = mysql_fetch_array($query);
$template = $row["name"];
//$template = 'classic';
?>