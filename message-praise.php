<?php
include 'conn.php';
if(isset($_GET['p'])) {
    $sql = "select * from message_board where id = {$_GET['p']} ";
    $query = mysql_query($sql);
    $row = mysql_fetch_array($query);
    $row['Praise'] = $row['Praise'] +1;
    $sql = "update message_board set Praise = {$row['Praise']} where id = {$_GET['p']}";
    $query = mysql_query($sql);
    header('Location: Message-Board.php');
}
?>