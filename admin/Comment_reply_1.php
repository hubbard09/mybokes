<?php
include 'conn.php';
session_start();
$id = $_GET['p'];
if (isset($_POST['submit'])) {
    $sql = "INSERT INTO admin_reply (id, name, content, lastdate,messageid) VALUES (NULL,'{$_POST['name']}','{$_POST['content']}',now(),'$id')";
    mysql_query($sql);
    $url = "dope.php";
    echo "<script language = 'javascript' type = 'text/javascript'>"; echo "window.location.href = '$url'"; echo "</script>";
}
$sql = "select * from admin_reply where id = $id";
$query = mysql_query($sql);
$rowo = mysql_fetch_array($query);
include "Template/comment_reply.html";
?>