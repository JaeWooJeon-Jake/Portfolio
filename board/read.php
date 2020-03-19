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

		<div class="file">
		파일 : <a href="../upload/<?php echo $board['file'];?>" download><?php echo $board['file']; ?></a>
		</div>


<!--- 댓글 불러오기 -->
<div class="reply_view">
	<h3>댓글목록</h3>
		<?php
			$sql3 = mq("select * from comment where con_num='".$bno."' order by idx desc");
			while($reply = $sql3->fetch_array()){ 
		?>
		<div class="dap_lo">
			<div><b><?php echo $reply['name'];?></b></div>
			<div class="dap_to comt_edit"><?php echo nl2br("$reply[content]"); ?></div>
			<div class="rep_me dap_to"><?php echo $reply['date']; ?></div>
			<div class="rep_me rep_menu">
				<a class="dat_edit_bt" href="co_edit.php">수정</a>
				<a class="dat_delete_bt" href='co_delete.php?idx=<?php echo $reply['idx']; ?>' >삭제</a>
			</div>
		</div>
		<?php } ?>
</div><!--- 댓글 불러오기 끝 -->

<!--- 댓글 입력 폼 -->
	<div class="co_form">
	<form method="post" class="reply_form" action="comment_action.php">
			<input type="hidden" name="bno" class="bno" value="<?php echo $bno; ?>">
			<input type="hidden" name="dat_user" id="dat_user" class="dat_user" value="<?php echo $_SESSION['username']; ?>">
			<div>
				<textarea name="content" class="reply_content" id="re_content" ></textarea>
				<button type="submit" id="rep_bt" class="re_bt">댓글</button>
			</div>
			</form>
	</div>


</body>
</html>