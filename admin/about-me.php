<?php
session_start();
include "conn.php";
if(isset($_SESSION['username']) == "") {
    echo '您的用户未登录，麻烦您<a href="login.php">重新登录</a> ';
    exit;
}
if(isset($_POST['submit'])) {
    include "../text.php";
    echo "<script language = javascript>alert('是否真的要修改');history.back();</script>";
    if (isset($destination) <> "") {
        $sql = "update admin set Life_motto = '{$_POST['content']}', net_name = '{$_POST['net_name']}', admin_name = '{$_POST['admin_name']}', origin = '{$_POST['origin']}', Live = '{$_POST['Live']}', Occupation = '{$_POST['Occupation']}', Interest = '{$_POST['Interest']}', Book = '{$_POST['Book']}', Music = '{$_POST['Music']}' ,photo = '$destination' where id = 1";
        mysql_query($sql);
    } else {
        $sql = "update admin set Life_motto = '{$_POST['content']}', net_name = '{$_POST['net_name']}', admin_name = '{$_POST['admin_name']}', origin = '{$_POST['origin']}', Live = '{$_POST['Live']}', Occupation = '{$_POST['Occupation']}', Interest = '{$_POST['Interest']}', Book = '{$_POST['Book']}', Music = '{$_POST['Music']}' where id = 1";
        mysql_query($sql);
    }
}
$sql = "select * from admin ";
$query = mysql_query($sql);
$row = mysql_fetch_array($query);
include "Template/about.html"
?>