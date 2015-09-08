<?php
include "conn.php";
session_start();
$id = $_GET['p'];
$sql = "select * from message where id = $id";
$query = mysql_query($sql);
$row = mysql_fetch_array($query);
$sql = "update message set audit = 'F' where id = $id";
mysql_query($sql);

if (isset($_SESSION['userurl'])) {
    $url = $_SESSION['userurl'];
    echo "<script language = 'javascript' type = 'text/javascript'>";
    echo "window.location.href = '$url'";
    echo "</script>";
    exit;
} else {
    $url = "post.php?p={$row['messageid']}";
    echo "<script language = 'javascript' type = 'text/javascript'>";
    echo "window.location.href = '$url'";
    echo "</script>";
}
?>