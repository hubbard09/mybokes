<?php
include 'conn.php';
session_start();
$sql = "select * from userpost order by id desc limit 1 ";
$query = mysql_query($sql);
$rowoo = mysql_fetch_array($query);
$sql = "select * from userpost order by id desc limit 2,4 ";
$query = mysql_query($sql);
$sql = "select * from userpost order by click desc limit 2 ";
$recommend = mysql_query($sql);
$sql = "select * from message_board order by id desc limit 3 ";
$messages = mysql_query($sql);
include "Template/index.html"
?>

