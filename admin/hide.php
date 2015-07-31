<?php
session_start();
include "conn.php";
if(isset($_SESSION['username']) == "") {
    echo '您的用户未登录，麻烦您<a href="login.php">重新登录</a> ';
    exit;
}
include("pageft_hide.php");
include "Template/hide.html";
?>
