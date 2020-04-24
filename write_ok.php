
<?php
include $_SERVER['DOCUMENT_ROOT']."/db.php";

$date = date('Y-m-d');

Console_log($_POST['name']);
Console_log($_POST['title']);
Console_log($_POST['content']);
Console_log($date);

$mqq = mq("alter table board auto_increment =1"); //auto_increment 값 초기화
$sql = mq("INSERT INTO board(name,title,content,wdate) VALUES ('".$_POST['name']."','".$_POST['title']."','".$_POST['content']."','".$date."')");

Console_log($sql);
?>

<meta http-equiv="refresh" content="0 url=/board.php" />