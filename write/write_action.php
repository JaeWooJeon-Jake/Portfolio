<?php
	include $_SERVER['DOCUMENT_ROOT']."/db/connect.php";
	header("Content-Type: text/html; charset=UTF-8");

	$id = $_SESSION['userid'];
	$pw = $_POST[pw];
	$title = $_POST[title];
	$content = $_POST[content];
	$date = date('Y-m-d H:i:s');

	$URL = '../index.php';

	$sql = mq("insert into board(id,pw,title,content,date,hit) values('".$id."','".$pw."','".$title."','".$content."','".$date."', 0)"); 

	if(result){
?>		
		<script>
			alert("<?php echo "글이 등록되었습니다."?>");
			location.replace("<?php echo $URL?>");
		</script>
<?php
	}
	else{
		echo "FAIL";
	}

	mysqli_close($connect);
	
?> 