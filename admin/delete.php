<?php
include "conn.php";
$id = $_GET['p'];
$sql = "select id from message where messageid =$id";
$query = mysql_query($sql);
$row = mysql_fetch_array($query);

$sql = "delete from admin_reply where messageid = {$row['id']}";
mysql_query($sql);

$sql = "DELETE FROM userpost WHERE id = $id ";
mysql_query($sql);

$sql = "DELETE FROM message WHERE  messageid = $id ";
mysql_query($sql);

$url = "article.php";
echo "<script language = 'javascript' type = 'text/javascript'>"; echo "window.location.href = '$url'"; echo "</script>";
?>