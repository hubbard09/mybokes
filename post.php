<?php
include 'conn.php';
session_start();
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
$sql = "select * from userpost order by Recommend desc limit 2";
$recommend = mysql_query($sql);
include("pageft_b.php");
include "Template/blog.html";
?>