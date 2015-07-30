<?php
include 'conn.php';
session_start();
$_SESSION['userurl'] = $_SERVER['REQUEST_URI'];
if(isset($_SESSION['username']) == "") {
    echo '<a href="login.php">您还未登录，请您登录后再回复</a>';
    exit;
}
$id = $_GET['p'];
$sql = "select * from message where id = $id";
$query = mysql_query($sql);
$rowo = mysql_fetch_array($query);
if (isset($_POST['submit'])) {
    $sql = "INSERT INTO admin_reply (id, name, content, lastdate,messageid) VALUES (NULL,'{$_POST['name']}','{$_POST['content']}',now(),'$id')";
    mysql_query($sql);
    $url = "post.php?p={$rowo['messageid']}";
    echo "<script language = 'javascript' type = 'text/javascript'>"; echo "window.location.href = '$url'"; echo "</script>";
}

include "Template/comment_reply.html";
?>