<?php
include 'conn.php';
include "params.php";
session_start();
$_SESSION['userurl'] = $_SERVER['REQUEST_URI'];
if(isset($_SESSION['username']) == "") {
    echo '<a href="login.php">您还未登录，请您登录后再回复</a>';
    exit;
}
$id = $_GET['p'];
$sql = "select * from admin_reply where id = $id";
$one = mysql_query($sql);
$onef = mysql_fetch_array($one);
$sql = "select messageid from message where id = {$onef['messageid']}";
$query = mysql_query($sql);
$row = mysql_fetch_array($query);
if (isset($_POST['submit'])) {
    $sql = "INSERT INTO admin_reply (id, name, content, lastdate,messageid) VALUES (NULL,'{$_POST['name']}','{$_POST['content']}',now(),'{$onef['messageid']}')";
    mysql_query($sql);
    $url = "post.php?p={$row['messageid']}";
    echo "<script language = 'javascript' type = 'text/javascript'>"; echo "window.location.href = '$url'"; echo "</script>";
}
include "Template/" . $template . "/comment_reply.php";
?>