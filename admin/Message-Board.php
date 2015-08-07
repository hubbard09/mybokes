<?php
session_start();
include 'conn.php';
include "params.php";
$_SESSION['userurl'] = $_SERVER['REQUEST_URI'];
if(isset($_SESSION['username']) == "") {
    echo '您的用户未登录，麻烦您<a href="login.php">重新登录</a> ';
    exit;
}
include("pageft_a.php");

$sql = "SELECT * FROM `message_board` ORDER BY Praise desc limit 3";
$query = mysql_query($sql);

$sql = "SELECT * FROM `message_board` ORDER BY id desc limit 7";
$querytwo = mysql_query($sql);

$sql = "select audit from message_board ";
$audit = mysql_query($sql);

$sql = "select * from message_board where audit = 'F'";
$two = mysql_query($sql);
$twof = mysql_num_rows($two);


include "Template/" . $template . "/message.php"
?>