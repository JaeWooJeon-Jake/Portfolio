<?php

  include $_SERVER['DOCUMENT_ROOT']."/db/connect.php";

	$pw=$_POST['pw'];
	$pw2=$_POST['pw2'];

	if($pw != $pw2){
		echo "<script>alert('비밀번호가 다릅니다.'); history.back();</script>";
	}else{
	
	$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);

	$sql = mq("update member set pw='".$userpw."' where id = '".$_SESSION['uid']."'");
	session_destroy();
	echo "<script>alert('비밀번호를 변경했습니다.'); location.href='/index.php';</script>";
}
?>