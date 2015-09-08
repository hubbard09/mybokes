<?php
include "conn.php";
$id = $_GET['p'];
session_start();
$sql = "select * from message where id = $id";
$query = mysql_query($sql);
$row = mysql_fetch_array($query);
$sql = "update message set audit = 'T' where id = $id";
mysql_query($sql);
if (isset($_SESSION['userurl'])) {
    $url = $_SESSION['userurl'];
    echo "<script language = 'javascript' type = 'text/javascript'>";
    echo "window.location.href = '$url'";
    echo "</script>";
    exit;
} else {
    $url = "../article.php";
    echo "<script language = 'javascript' type = 'text/javascript'>";
    echo "window.location.href = '$url'";
    echo "</script>";
}
?>