<?php
include "../conn.php";
session_start();
$id = $_GET['p'];
echo "<script language = javascript>alert('是否真的要删除');history.back();</script>";
$sql = "DELETE FROM message_board WHERE id = $id ";
mysql_query($sql);
$sql = "DELETE FROM message_board_reply WHERE  messageid = $id ";
mysql_query($sql);
$url = "../dope.php";
echo "<script language = 'javascript' type = 'text/javascript'>"; echo "window.location.href = '$url'"; echo "</script>";
?>