<?php
include "conn.php";
$id = $_GET['p'];
$sql = "update message_board_reply set audit = 'F' where id = $id";
mysql_query($sql);
$url = "Message-Board.php";
echo "<script language = 'javascript' type = 'text/javascript'>"; echo "window.location.href = '$url'"; echo "</script>";
exit;
?>