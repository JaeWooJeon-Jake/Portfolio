<?php
	header("Content-Type: text/html; charset=UTF-8");

	session_start();
	$result = session_destroy();

	if($result){
?>
	<script>
		alert("로그아웃 되었습니다.");
		history.back();
	</script>
<?php }
?>