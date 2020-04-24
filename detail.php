<?php
    include $_SERVER['DOCUMENT_ROOT']."/db.php";
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>DETAIL</title>
    <link rel = "stylesheet" type="text/css" href="/css/detail.css"/> 
</head>
<body>
    <?php
        $bno = $_GET['id'];
        Console_log($bno);
        $hit = mysqli_fetch_array(mq("select * from board where id='".$bno."'"));
        $hit = $hit['hit']+1;
        $fet = mq("update board set hit = '".$hit."' where id = '".$bno."'");
		$sql = mq("select * from board where id='".$bno."'");  /* 받아온 idx값을 선택 */
		$board = $sql->fetch_array();
	?>
    <!-- 글 불러오기 -->
    <div id="board_read">
        <h2><?php echo $board['title']; ?></h2>
            <div id="user_info">
                <?php echo $board['name'];?> <?php echo $board['wdate'];?> 조회: <?php echo $board['hit'];?>
                    <div id="bo_line"></div> 
            </div>
            <div id="bo_content">
                <?php echo nl2br("$board[content]"); ?>
            </div>
    <!-- 목록 수정,삭제 -->
    <div id="bo_ser">
        <ul>
            <li><a href="board.php">[목록으로]</a></li>
            <li><a href="modify.php?id=<?php echo $board['id']; ?>">[수정]</a></li>
            <li><a href="delete.php?id=<?php echo $board['id']; ?>">[삭제]</a></li>
        </ul>
    </div>
    </div>    
</body>
</html>