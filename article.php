<?php
session_start();
include "conn.php";
$sql = "select * from userpost where hide = 'T' and top = 'T' ORDER by id desc";
$top = mysql_query($sql);


include("pageft_article.php");
include "Template/article.html";
?>
