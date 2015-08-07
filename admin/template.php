<?php
include "conn.php";
session_start();
if(isset($_SESSION['username']) == "") {
    echo '您的用户未登录，麻烦您<a href="login.php">重新登录</a> ';
    exit;
}
$_SESSION['userurl'] = $_SERVER['REQUEST_URI'];
$sql = "select id from template where name = 'default'";
$rows = mysql_query($sql);
$in = mysql_fetch_array($rows);

$sql = "select * from template where name = 'dream'";
$query = mysql_query($sql);
$one = mysql_fetch_array($query);

include "params.php";
include "Template/" . $template . "/template.php";
?>