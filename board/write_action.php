<?php
	include $_SERVER['DOCUMENT_ROOT']."/db/connect.php";
	header("Content-Type: text/html; charset=UTF-8");

	$id = $_SESSION['userid'];
	$pw = $_POST[pw];
	$title = $_POST[title];
	$content = $_POST[content];
	$date = date('Y-m-d H:i:s');
	$name = $_POST[name];

	$tmpfile =  $_FILES['b_file']['tmp_name'];
	$o_name = $_FILES['b_file']['name'];
	$filename = iconv("UTF-8", "EUC-KR",$_FILES['b_file']['name']);
	$folder = "../upload/".$filename;
	move_uploaded_file($tmpfile,$folder);

	$URL = '../index.php';
	
	$mqq = mq("alter table board auto_increment =1");

	$sql = mq("insert into board(id,pw,title,content,date,hit,name,file) values('".$id."','".$pw."','".$title."','".$content."','".$date."', 0,'".$name."','".$o_name."')"); 

	if(result){
?>		
		<script>
			alert("<?php echo "글이 등록되었습니다."?>");
			location.replace("<?php echo $URL?>");
		</script>
<?php
	}else{
		echo "FAIL";
	}

	mysqli_close($connect);
	
?> 