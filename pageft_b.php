<?php
// 建立数据库连接  
include "conn.php";
;// 获取当前页数
if(isset($_GET['page'])) {
    $page = intval($_GET['page']);
} else {
    $page = 1;
}  
// 每页数量  
$page_size = 5;
// 获取总数据量  
$sql = "select * from message where messageid = $id";
$result = mysql_query($sql);
$row = mysql_num_rows($result);
$i=$row;
$amount = $i;  
// 记算总共有多少页  
if( $amount ) {
    if( $amount < $page_size ) { $page_count = 1; } //如果总数据量小于$PageSize，那么只有一页  
    if( $amount % $page_size ) { //取总数据量除以每页数的余数  
        $page_count = (int)($amount / $page_size) + 1; //如果有余数，则页数等于总数据量除以每页数的结果取整再加一  
    } else {
        $page_count = $amount / $page_size ; //如果没有余数，则页数等于总数据量除以每页数的结果  
    }  
} else {
    $page_count = 0;
}
// 获取数据，以二维数组格式返回结果  
if( $amount ) {
    $sql = "select * from message where messageid = $id order by id desc limit ". ($page-1)*$page_size .",$page_size";
    $result =mysql_query($sql);
}
// 翻页链接  
$page_string ="";
if( $page == 1 ) {
    $page_string.="首页&nbsp;|&nbsp;上一页&nbsp;|&nbsp;";
} else {
    $page_string.= "<a href=post.php?p=$id&page=1>首页</a>&nbsp;|&nbsp;<a href=post.php?p=$id&page=".($page-1).">上一页</a>&nbsp;|&nbsp;";
}  
if( ($page == $page_count) || ($page_count == 0) ) {
    $page_string.=" 下一页&nbsp;|&nbsp;尾页";
} else {
    $page_string.= "<a href=post.php?p=$id&page=".($page+1).">下一页</a>&nbsp;|&nbsp;<a href=post.php?p=$id&page=".$page_count.">尾页</a>";
}
$page_num = $page;
?>
