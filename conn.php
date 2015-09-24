<?php

$conn = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);if(!$conn){ die('could
 not connect:'.mysql_error()); }mysql_select_db(SAE_MYSQL_DB,$conn);
mysql_query("set names 'utf8'");
if(mysqli_connect_errno()) {
    echo 'Error:dcgggggggg';
    exit;
}?>
