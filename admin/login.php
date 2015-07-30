<?php
include 'conn.php';
session_start();
if(isset ($_POST['submit']) ) {
    if($_POST['submit'] == '登录') {
        $name = $_POST['log'];
        $password = $_POST['pwd'];
        if($name && $password) {
            $sql = "select * from admin where name = '$name' and password = '$password'";
            $query = mysql_query($sql);
            $row = mysql_num_rows($query);
         if($row) {
             $_SESSION['username'] = $name;
             $url = "index.php";
             echo "<script language = 'javascript' type = 'text/javascript'>"; echo "window.location.href = '$url'"; echo "</script>";
             exit;
         } echo "<script language = javascript>alert('用户名密码错误');history.back();</script>";
           exit;
        } echo "<script language = javascript>alert('用户名密码不能为空');history.back();</script>";
              exit;
    }
}
include "../admin/Template/login.html"
?>
<meta http-equiv="content-type" content="text/html;charset=utf-8">

