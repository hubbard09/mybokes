<?php
include 'conn.php';
include 'params.php';
session_start();
$_SESSION['userurl'] = $_SERVER['REQUEST_URI'];
$id = $_GET['p'];
$sql = "select * from userpost where id = $id ";
$query = mysql_query($sql);
$rowone = mysql_fetch_array($query);
if (isset($_POST['submit'])) {
    if(isset($_SESSION['username']) == "") {
        echo '您的用户未登录，麻烦您<a href="login.php">重新登录</a> ';
        exit;
    }
    $sql = "INSERT INTO message (id, name, content, messageid, lastdate) VALUES (NULL, '{$_SESSION['username']}', '{$_POST['content']}', '$id', now())";
    mysql_query($sql);
}
$sql = "select * from userpost order by click desc limit 2";
$recommend = mysql_query($sql);

$sql = "select * from userpost where id < $id order by id DESC limit 1";
$reads = mysql_query($sql);
$readsh = mysql_fetch_array($reads);

$sql = "select * from userpost where id > $id order by id ASC limit 1";
$readx = mysql_query($sql);
$readxia = mysql_fetch_array($readx);
include("pageft_b.php");
include "Template/" . $template . "/blog.php";
?>