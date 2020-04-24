<?php
	include $_SERVER['DOCUMENT_ROOT']."/db.php";
	
	$bno = $_GET['id'];
	$sql = mq("delete from board where id='$bno';");
?>
<meta http-equiv="refresh" content="0 url=/board.php" />