<?php
include $_SERVER['DOCUMENT_ROOT']."/db/connect.php";

if($_POST["name"] == "" || $_POST["email"] == ""){
		echo '<script> alert("항목을 입력하세요"); history.back(); </script>';
	}else{

	$username = $_POST['name'];
	$email = $_POST['email'].'@'.$_POST['emadrress'];


$sql = mq("select * from member where name = '{$username}' && email = '{$email}'");
$result = $sql->fetch_array();

if($result["name"] == $username){
	echo "<script>alert('회원님의 ID는 ".$result['id']."입니다.'); history.back();</script>";
}else{
echo "<script>alert('존재하지 않는 계정입니다.'); history.back();</script>";
}
}
?>