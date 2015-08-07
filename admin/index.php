<?php
include 'conn.php';
include "params.php";
session_start();
if(isset($_SESSION['username']) == "") {
    echo '您的用户未登录，麻烦您<a href="login.php">重新登录</a> ';
    exit;
}
$sql = "select * from userpost order by id desc limit 1 ";
$query = mysql_query($sql);
$rowoo = mysql_fetch_array($query);

$sql = "select * from userpost order by id desc limit 2,6 ";
$query = mysql_query($sql);

$sql = "select * from userpost order by recommend desc limit 2 ";
$recommend = mysql_query($sql);

$sql = "select * from message_board order by id desc limit 3 ";
$messages = mysql_query($sql);

$add = 0;
$sql = "select * from message where audit = 'F'";
$one = mysql_query($sql);
$onef = mysql_num_rows($one);

$sql = "select * from message_board where audit = 'F'";
$two = mysql_query($sql);
$twof = mysql_num_rows($two);

$sql = "select * from admin_reply where audit = 'F'";
$three = mysql_query($sql);
$threef = mysql_num_rows($three);

$sql = "select * from message_board_reply where audit = 'F'";
$ff = mysql_query($sql);
$fou = mysql_num_rows($ff);
$add = $onef + $twof + $threef + $fou;
include "Template/" . $template . "/index.php"
?>

