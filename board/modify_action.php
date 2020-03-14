<!--<?php
include $_SERVER['DOCUMENT_ROOT']."/db/connect.php";

$bno = $_POST['idx'];
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$sql = mq("update board set id='".$_POST['id']."', password='".$userpw."',title='".$_POST['title']."',content='".$_POST['content']."' where idx='".$bno."'"); 
?>

<script type="text/javascript">alert("수정되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=../index.php?idx=<?php echo $bno; ?>"> -->


<?php


$bno = $_POST['idx'];
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$sql = mq("update board set id='".$_POST['id']."',pw='".$userpw."',title='".$_POST['title']."',content='".$_POST['content']."' where idx='".$bno."'"); ?>
?>
<script type="text/javascript">alert("수정되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/board/read.php?idx=<?php echo $bno; ?>">