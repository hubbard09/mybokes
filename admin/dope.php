<?php
session_start();
include 'conn.php';
$sql = "SELECT * FROM `message` where audit = 'F' ORDER BY `message`.`lastdate` DESC";
$query = mysql_query($sql);
if(isset ($_POST['submit']) ) {
    if(isset($_SESSION['username']) == "") {
        echo '您的用户未登录，麻烦您<a href="login.php">重新登录</a> ';
        exit;
    }
    $sql = "INSERT INTO message_board( name,content, lastdate) VALUES ('{$_SESSION['username']}', '{$_POST['content']}', now())";
    mysql_query($sql);
}
$sql = "select * from message_board where audit = 'F' order by lastdate desc";
$result = mysql_query($sql);

$sql = "select * from admin_reply where audit = 'F'";
$three = mysql_query($sql);


$sql = "select * from message_board_reply where audit = 'F'";
$ff = mysql_query($sql);

include("../pageft_dope.php");
include "Template/dope.html"
?>