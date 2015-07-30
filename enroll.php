<?php
include 'conn.php';
if(isset($_POST['submit'])) {
    $sql = "select * from user ";
    $query = mysql_query($sql);
    $name = mysql_fetch_array($query);
    if(isset($name['name']) == isset($_POST['log'])) {
        echo '<a href="enroll.php">您的用户已存在，请重新注册。</a>';
        exit;
    }
    if(isset($_POST['log']) && isset( $_POST['pwd'])) {
                $sql = "INSERT INTO user (id, name, password, sex, lastdate) VALUES (NULL, '{$_POST['log']}', '{$_POST['pwd']}', '{$_POST['sex']}', now())";
                mysql_query($sql);
                echo '<a href="login.php">您已成功注册，请登录</a>';
                exit;
        } echo "<script language = javascript>alert('用户名和密码不能为空');history.back();</script>";
          exit;
}
include "Template/enroll.html"
?>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
