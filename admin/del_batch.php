<?php
include('conn.php');
header('Content-Type: text/html; charset=utf-8');
if($_POST['btnSave']){

    if(empty($_POST['id'])){
        echo"<script>alert('请先选择项目');history.back(-1);</script>";
        exit;
    }else{
        /*如果要获取全部数值则使用下面代码*/

        $id= implode(",",$_POST['id']);
        $str="DELETE FROM `userpost` where id in ($id)";
        mysql_query($str);
        echo "<script>alert('删除成功！');window.location.href='article.php';</script>";
    }
}
?>