<?php
session_start();
include "conn.php";
include "params.php";
if(isset($_SESSION['username']) == "") {
echo '您的用户未登录，麻烦您<a href="login.php">重新登录</a> ';
exit;
}
$sql = "select * from message where audit = 'F'";
$one = mysql_query($sql);
$onef = mysql_num_rows($one);


include("pageft.php");
include "Template/" . $template . "/article.php";
?>