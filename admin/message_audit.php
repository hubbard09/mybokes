<?php
include "conn.php";
$id = $_GET['p'];
$sql = "update message_board set audit = 'T' where id = $id";
mysql_query($sql);
$url = "Message-Board.php";
echo "<script language = 'javascript' type = 'text/javascript'>"; echo "window.location.href = '$url'"; echo "</script>";
exit;
?>