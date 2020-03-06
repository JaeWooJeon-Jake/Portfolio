<?php
	include "db/connect.php";
	header("Content-Type: text/html; charset=UTF-8");
	$id = $_POST[name];
	$pw = $_POST[pw];
	$title = $_POST[title];
	$content = $_POST[content];
	$date = date('Y-m-d H:i:s');

	$URL = './index.php';

	$query = "insert into board (number, title, content, id, password, date, hit)
				values(null, '$title', '$content', '$id', $pw, '$date', 0)";

	$result = $connect -> query($query);
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