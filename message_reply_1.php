<?php
include 'conn.php';
session_start();
$_SESSION['userurl'] = $_SERVER['REQUEST_URI'];
if(isset($_SESSION['username']) == "") {
    echo '<a href="login.php">您还未登录，请您登录后再回复</a>';
    exit;
}
$id = $_GET['p'];
if (isset($_POST['submit'])) {
    $sql = "INSERT INTO message_board_reply (id, name, content, lastdate,messageid) VALUES (NULL,'{$_POST['name']}','{$_POST['content']}',now(),'$id')";
    mysql_query($sql);
    $url = "Message-Board.php";
    echo "<script language = 'javascript' type = 'text/javascript'>"; echo "window.location.href = '$url'"; echo "</script>";
}
$sql = "select * from message_board_reply where id = $id";
$query = mysql_query($sql);
$rowo = mysql_fetch_array($query);
include "Template/message_reply.html";
?>