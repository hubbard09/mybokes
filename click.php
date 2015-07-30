<?php
include "conn.php";
$id = $_GET{'p'};
$sql = "select * from userpost where id = $id";
$query = mysql_query($sql);
$row = mysql_fetch_array($query);
$click = $row{'click'} + 1;
$sql = "update userpost set click = $click where id = $id";
mysql_query($sql);
$url = "post.php?p=".$row['id'];
echo "<script language = 'javascript' type = 'text/javascript'>";
echo "window.location.href = '$url'";
echo "</script>";
?>