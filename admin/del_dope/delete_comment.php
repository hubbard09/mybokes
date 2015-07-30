<?php
include "../conn.php";
$id = $_GET['p'];
$sql = "select * FROM message WHERE id = $id ";
$dell = mysql_query($sql);
$dele = mysql_fetch_array($dell);

$sql = "DELETE FROM admin_reply WHERE  messageid = {$dele['id']} ";
mysql_query($sql);

$sql = "DELETE FROM message WHERE id = $id ";
mysql_query($sql);

$url = "../dope.php";
echo "<script language = 'javascript' type = 'text/javascript'>"; echo "window.location.href = '$url'"; echo "</script>";
?>