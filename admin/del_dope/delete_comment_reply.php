<?php
include "../conn.php";
session_start();
$id = $_GET['p'];
echo "<script language = javascript>alert('是否真的要删除');history.back();</script>";
$sql = "DELETE FROM admin_reply WHERE id = $id ";
mysql_query($sql);
if(isset($_SESSION['userurl'])) {
    $url = $_SESSION['userurl'];
    echo "<script language = 'javascript' type = 'text/javascript'>";
    echo "window.location.href = '$url'";
    echo "</script>";
    exit;
} else {
    $url = "article.php";
    echo "<script language = 'javascript' type = 'text/javascript'>";
    echo "window.location.href = '$url'";
    echo "</script>";
}
?>