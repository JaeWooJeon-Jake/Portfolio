<?php
	include $_SERVER['DOCUMENT_ROOT']."/db/connect.php";
	
if($_POST["userid"] == "" || $_POST["username"] == ""){
		echo '<script> alert("항목을 입력하세요"); history.back(); </script>';
	}else{

	$userid = $_POST['userid'];
	$name = $_POST['username'];


$sql = mq("select * from member where id = '{$userid}' && name = '{$name}'");
$result = $sql->fetch_array();
	

	if($result["id"] == $userid){
		$_SESSION['uid'] = $userid;
		echo "<script>alert('회원님의 비밀번호를 변경합니다.'); location.href='member_pw_update.php';</script>";

	}else{
		echo "<script>alert('없는 계정입니다.'); history.back();</script>";
}
	}
?>