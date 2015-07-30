<?php
include 'conn.php';
session_start();
if(isset($_SESSION['username']) == "") {
    echo '您的用户未登录，麻烦您<a href="login.php">重新登录</a> ';
    exit;
}
$id = $_GET['p'];
if (isset($_POST['submit'])) {
    include "../text.php";
    echo "<script language = javascript>alert('是否真的要修改');history.back();</script>";
    if (isset($destination) <> "") {
        $sql = "UPDATE userpost SET  user ='{$_POST['name']}' , title = '{$_POST['title']}' , content =  '{$_POST['content']}', images = '$destination' , lastdate = now() where id = $id";
        mysql_query($sql);
    } else {
        $sql = "UPDATE userpost SET  user ='{$_POST['name']}' , title = '{$_POST['title']}' , content =  '{$_POST['content']}' , lastdate = now() where id = $id";
        mysql_query($sql);
    }
}
$sql = "select * from userpost where id = $id ";
$query = mysql_query($sql);
$row = mysql_fetch_array($query);

$sql = "select * from message where messageid = $id order by id desc limit 10";
$query = mysql_query($sql);

$sql = "select * from userpost order by Recommend desc limit 2";
$recommend = mysql_query($sql);

include "Template/blog.html";
?>