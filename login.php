
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<?php
include 'conn.php';
include "params.php";
session_start();
if(isset ($_POST['submit']) ) {
    if($_POST['submit'] == '登录') {
        $name = $_POST['log'];
        $password = $_POST['pwd'];
        if($name && $password) {
            $sql = "select * from user where name = '$name' and password = '$password'";
            $query = mysql_query($sql);
            $row = mysql_num_rows($query);
         if($row) {
             $_SESSION['username'] = $name;
             if(isset($_SESSION['userurl'])) {
                 $url = $_SESSION['userurl'];
                 echo "<script language = 'javascript' type = 'text/javascript'>";
                 echo "window.location.href = '$url'";
                 echo "</script>";
                 exit;
             } else {
                 $url = "index.php";
                 echo "<script language = 'javascript' type = 'text/javascript'>";
                 echo "window.location.href = '$url'";
                 echo "</script>";
             }
         } echo "<script language = javascript>alert('用户名密码错误');history.back();</script>";
           exit;
        } echo "<script language = javascript>alert('用户名密码不能为空');history.back();</script>";
              exit;
    }
        if($_POST['submit'] == '注册') {
            header('Location: enroll.php');
        }
}
include "Template/" . $template . "/login.php"
?>


