<?php
include "conn.php";
session_start();
$id = $_GET['p'];
$sql = "update message_board_reply set audit = 'T' where id = $id";
mysql_query($sql);
if (isset($_SESSION['userurl'])) {
    $url = $_SESSION['userurl'];
    echo "<script language = 'javascript' type = 'text/javascript'>";
    echo "window.location.href = '$url'";
    echo "</script>";
    exit;
} else {
    $url = "Message-Board.php";
    echo "<script language = 'javascript' type = 'text/javascript'>";
    echo "window.location.href = '$url'";
    echo "</script>";
}
?>