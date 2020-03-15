<?php
	header("Content-Type: text/html; charset=UTF-8");

	include $_SERVER['DOCUMENT_ROOT']."/db/connect.php";
	


	    $id=$_POST['userid'];
        $pw=password_hash($_POST['userpw'], PASSWORD_DEFAULT);
		$pw1=$_POST['userpw'];
		$pw2=$_POST['userpw2'];
        $email=$_POST['email'];
		$date = date('Y-m-d H:i:s');
		$name = $_POST['username'];

	$id_check = mq("select * from member where id='$id'");
	$id_check = $id_check->fetch_array();
	
	if($id_check >= 1){
		echo "<script>alert('아이디가 중복됩니다.'); history.back();</script>";
	}else if($pw1 != $pw2){
		echo "<script>alert('비밀번호가 다릅니다.'); history.back();</script>";
	}else{
	$sql = mq("insert into member(id,pw,date,name,email) values('$id', '$pw','$date','$name','$email')"); 
	?>

<meta charset="utf-8" />
<script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
<meta http-equiv="refresh" content="0 url=/">
<?php }  ?>
		