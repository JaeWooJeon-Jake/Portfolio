<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<link rel="stylesheet" type="text/css" href="../css/read.css" />
</head>

<body>
	<?php
	include $_SERVER['DOCUMENT_ROOT']."/header.php";
		$bno = $_GET['idx']; /* bno함수에 idx값을 받아와 넣음*/
		$hit = mysqli_fetch_array(mq("select * from board where idx ='".$bno."'"));
		$hit = $hit['hit'] + 1;
		$fet = mq("update board set hit = '".$hit."' where idx = '".$bno."'");
		$sql = mq("select * from board where idx='".$bno."'"); /* 받아온 idx값을 선택 */
		$board = $sql->fetch_array();
	?>


<table class="view_table" align=center>
        <tr>
                <td colspan="4" class="view_title"><?php echo $board['title'];?></td>
        </tr>
        <tr>
				 <td class="view_id">작성자</td>
                <td class="view_id2"><?php echo $board['name']?></td>
				   <td class="view_hit">조회수</td>
                <td class="view_hit2"><?php echo $board['hit']; ?></td>
    
        </tr>
		<tr>
                <td colspan="4" class="view_content" valign="top">
               <?php echo nl2br("$board[content]"); ?></td>
        </tr>
        </table>

		<div class="view_btn">
                <button class="view_btn1" onclick="location.href='../index.php'">목록으로</button>
                <button class="view_btn1" onclick="location.href='modify.php?idx=<?php echo $board['idx']; ?>'">수정</button>
				<button class="view_btn1" onclick="location.href='delete.php?idx=<?php echo $board['idx']; ?>'">삭제</button>
        </div>
</body>
</html>