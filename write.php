<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Write</title>
    <link rel = "stylesheet" type="text/css" href="/css/style.css"/>   
</head>

<body>
    <div id="board_write">
        <div id="write_area">
            <form action="write_ok.php" method="post">
                <div id="in_title">
                    <textarea name="title" id="utitle" rows="1" cols="55" placeholder="제목을 입력해주세요" maxlength="100" requeired></textarea>
                </div>
                <div class="wi_line"></div>
                <div id="in_name">
                    <textarea name="name" id="uname" rows="1" cols="55" placeholder="글쓴이를 입력해주세요" maxlength="100" requeired></textarea>
                </div>
                <div class="wi_line"></div>
                <div id="in_content">
                    <textarea name="content" id="ucontent" placeholder="내용을 입력해주세요" requeired></textarea>
                </div>
                
                <div class="bt_se">
                    <button type="submit">글 작성</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</body>
</html>