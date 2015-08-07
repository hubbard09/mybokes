<?php
session_start();
include "conn.php";
include "params.php";
$sql = "select * from userpost where hide = 'T' and top = 'T' ORDER by id desc";
$top = mysql_query($sql);


include("pageft_article.php");
include "Template/" . $template . "/article.php";
?>
