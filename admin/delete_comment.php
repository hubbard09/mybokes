<?php
include "../admin/conn.php";
$id = $_GET['p'];
echo "<script language = javascript>alert('是否真的要删除');history.back();</script>";
$sql = "SELECT messageid from message where id = $id";
$query = mysql_query($sql);
$row = mysql_fetch_array($query);
$sql = "DELETE FROM message WHERE  id = $id ";
mysql_query($sql);
$url = "post.php?p={$row['messageid']}";
echo "<script language = 'javascript' type = 'text/javascript'>"; echo "window.location.href = '$url'"; echo "</script>";
?>