<?php
include 'conn.php';
include "params.php";
session_start();
$id = $_GET['p'];
if (isset($_POST['submit'])) {
    $sql = "INSERT INTO message_board_reply (id, name, content, lastdate,messageid) VALUES (NULL,'{$_POST['name']}','{$_POST['content']}',now(),'$id')";
    mysql_query($sql);
    if(isset($_SESSION['userurl'])) {
        $url = $_SESSION['userurl'];
        echo "<script language = 'javascript' type = 'text/javascript'>";
        echo "window.location.href = '$url'";
        echo "</script>";
        exit;
    } else {
        $url = "Message-Board.php";
        echo "<script language = 'javascript' type = 'text/javascript'>";
        echo "window.location.href = '$url'";
        echo "</script>";
    }
}
$sql = "select * from message_board_reply where id = $id";
$query = mysql_query($sql);
$rowo = mysql_fetch_array($query);
include "Template/" . $template . "/message_reply.php";
?>