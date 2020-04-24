<?php
include $_SERVER['DOCUMENT_ROOT']."/db.php";

$bno = $_POST['id'];
$sql = mq("update board set name='".$_POST['name']."',title='".$_POST['title']."',content='".$_POST['content']."' where id='".$bno."'"); ?>
?>

<meta http-equiv="refresh" content="0 url=/detail.php?id=<?php echo $bno; ?>">