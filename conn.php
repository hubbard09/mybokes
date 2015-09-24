<?php
$conn = @ mysql_connect("localhost", "root", "","test");
mysql_select_db("app_hubbard", $conn);
mysql_query("set names 'utf8'");
if(mysqli_connect_errno()) {
    echo 'Error:dcgggggggg';
    exit;
}
?>