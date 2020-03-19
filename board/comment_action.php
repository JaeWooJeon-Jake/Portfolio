<?php
	include $_SERVER['DOCUMENT_ROOT']."/db/connect.php";

	$URL = "/member/login.php";
                if(!isset($_SESSION['userid'])) {
        ?>
 
                <script>
                        alert("로그인이 필요합니다");
                         location.replace("<?php echo $URL?>");
                </script>
    <?php
			}else{

			$bno = $_POST['bno'];
			$id = $_SESSION['userid'];

			echo $bno;
			$date = date('Y-m-d H:i:s');

			$mqq = mq("alter table comment auto_increment =1");

			$sql = mq("insert into comment(con_num,id,name,content,date) values('".$bno."','".$id."','".$_POST['dat_user']."','".$_POST['content']."','".$date."')")
	?> 
	<meta http-equiv="refresh" content="0 url=/board/read.php?idx=<?php echo $bno;?>" />

	<?php
				} 
	?>