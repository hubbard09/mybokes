<?php
session_start();
include 'conn.php';
$sql = "SELECT * FROM `message_board` ORDER BY Praise desc limit 3";
$query = mysql_query($sql);
if(isset ($_POST['submit']) ) {
    if(isset($_SESSION['username']) == "") {
        echo '您的用户未登录，麻烦您<a href="login.php">重新登录</a> ';
        exit;
    }
    $sql = "INSERT INTO message_board( name,content, lastdate) VALUES ('{$_SESSION['username']}', '{$_POST['content']}', now())";
    mysql_query($sql);
}
include("pageft_message.php");
include "Template/message.html"
?>