<?php
include 'conn.php';
session_start();
$id = $_GET['p'];
if (isset($_POST['submit'])) {
    $sql = "UPDATE message_board SET   name ='{$_POST['name']}' , content =  '{$_POST['content']}', lastdate = now() where id = $id";
    mysql_query($sql);
    $url = "Message-Board.php";
    echo "<script language = 'javascript' type = 'text/javascript'>"; echo "window.location.href = '$url'"; echo "</script>";
}
$sql = "select * from message_board where id = $id ";
$query = mysql_query($sql);
$row = mysql_fetch_array($query);
include "Template/editorial_comment.html";
?>