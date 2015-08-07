<?php
include 'conn.php';
include "params.php";
session_start();
$id = $_GET['p'];
$sql = "select messageid from message where id = $id";
$query = mysql_query($sql);
$row = mysql_fetch_array($query);
if (isset($_POST['submit'])) {
    $sql = "INSERT INTO admin_reply (id, name, content, lastdate,messageid) VALUES (NULL,'{$_POST['name']}','{$_POST['content']}',now(),'$id')";
    mysql_query($sql);
    $url = "post.php?p={$row['messageid']}";
    echo "<script language = 'javascript' type = 'text/javascript'>"; echo "window.location.href = '$url'"; echo "</script>";
}
$sql = "select * from message where id = $id";
$query = mysql_query($sql);
$rowo = mysql_fetch_array($query);
include "Template/" . $template . "/comment_reply.php";
?>