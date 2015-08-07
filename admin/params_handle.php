<?php
include "conn.php";
session_start();
$sql = "update template set display = 'F' where display = 'T'";
mysql_query($sql);
$sql = "update template set display = 'T' where id = {$_GET['p']}";
mysql_query($sql);
if(isset($_SESSION['userurl'])) {
    $url = $_SESSION['userurl'];
    echo "<script language = 'javascript' type = 'text/javascript'>";
    echo "window.location.href = '$url'";
    echo "</script>";
    exit;
} else {
    $url = "admin/index.php";
    echo "<script language = 'javascript' type = 'text/javascript'>";
    echo "window.location.href = '$url'";
    echo "</script>";
}
?>