<?php 
  include_once  $_SERVER['DOCUMENT_ROOT']."/db.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Board</title>
<link rel = "stylesheet" type="text/css" href="/css/style.css"/>

</head>
<body>

<div id="board_area"> 
  <h1>게시판</h1>
 
    <table class="list-table">
      <thead>
          <tr>
              <th width="70">번호</th>
              <th width="500">제목</th>
              <th width="120">글쓴이</th>
              <th width="100">작성일</th>
              <th width="100">조회수</th>
          </tr>
      </thead>
       <?php
        // $sql = mq("select * from board order by id desc limit 0,5");
        $sql = mq("select @rownum:=@rownum+1 rownum, name,title,id,wdate,hit from binjiho.board,(select @rownum:=0) Tmp order by rownum desc;");
        while($board = $sql->fetch_array())
        {
          $title=$board["title"]; 
          if(strlen($title)>30)
          { 
            $title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]); //title이 30을 넘어서면 ...표시
          }     
       ?>
        <tbody>
        <tr>
          <td width="70"><?php echo $board['rownum']; ?></td>
          <td width="500"><a href="/detail.php?id=<?php echo $board["id"];?>"><?php echo $title;?></a></td>

          <td width="120"><?php echo $board['name'];?></td>
          <td width="100"><?php echo $board['wdate'];?></td>
          <td width="100"><?php echo $board['hit']; ?></td>
        </tr>
      </tbody>
      <?php } ?>
    </table>
    <div id="write_btn">
      <a href="write.php"><button>글쓰기</button></a>
    </div>
    </div>
</body>
</html>