<?php
include "../conn.php";
session_start();
$id = $_GET['p'];

$sql = "select * FROM message WHERE id = $id ";
$dell = mysql_query($sql);
$dele = mysql_fetch_array($dell);
echo "<script language = javascript>alert('是否真的要删除');history.back();</script>";
$sql = "DELETE FROM admin_reply WHERE  messageid = {$dele['id']} ";
mysql_query($sql);

$sql = "DELETE FROM message WHERE id = $id ";
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