<?php
include 'conn.php';
session_start();
if (isset($_POST['submit'])) {
    include "../text.php";
    $sql = "INSERT INTO userpost (id, user, title, content,  lastdate, Recommend, images) VALUES (NULL,'{$_POST['name']}','{$_POST['title']}','{$_POST['content']}',now(),'0','$destination')";
    mysql_query($sql);
    $url = "article.php";
    echo "<script language = 'javascript' type = 'text/javascript'>"; echo "window.location.href = '$url'"; echo "</script>";
}
include "Template/add_post.html";
?>