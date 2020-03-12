<?php
	include "../db/connect.php";
	
	$bno = $_GET['number'];
	$sql = mq("delete from board where number='$bno';");
?>
<script type="text/javascript">alert("삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/" />