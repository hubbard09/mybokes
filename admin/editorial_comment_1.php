<?php
include 'conn.php';
include "params.php";
session_start();
$id = $_GET['p'];
$sql = "SELECT messageid from admin_reply where id = $id";
$query = mysql_query($sql);
$rows = mysql_fetch_array($query);
if (isset($_POST['submit'])) {
    $sql = "UPDATE message SET   name ='{$_POST['name']}' , content =  '{$_POST['content']}', lastdate = now() where id = $id";
    mysql_query($sql);
    $url = "post.php?p={$rows['messageid']}";
    echo "<script language = 'javascript' type = 'text/javascript'>"; echo "window.location.href = '$url'"; echo "</script>";
}
$sql = "select * from admin_reply where id = $id ";
$query = mysql_query($sql);
$row = mysql_fetch_array($query);
include "Template/" . $template . "/editorial.php";
?>