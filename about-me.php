<?php
session_start();
include "conn.php";
$sql = "select * from admin";
$query = mysql_query($sql);
$row = mysql_fetch_array($query);
$_SESSION['userurl'] = $_SERVER['REQUEST_URI'];
include "Template/about.html"
?>