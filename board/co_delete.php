<?php
	include $_SERVER['DOCUMENT_ROOT']."/db/connect.php";

		

	$bno = $_GET[idx];
	//$bno = $_SESSION['userid'];
	$sql = mq("select * from comment where idx='".$bno."'"); /* 받아온 idx값을 선택 */
	$comment = $sql->fetch_array();

/*echo $comment[idx];
echo $comment[con_num];
echo $comment[id];
echo $comment[name];
echo $comment[content]; */

   $URL = "/member/login.php";
                if(!isset($_SESSION['userid'])) {
        ?>
 
                <script>
                        alert("로그인이 필요합니다");
                        location.replace("<?php echo $URL?>");
                </script>
		<?php 
				}else if($_SESSION['userid']!= $comment['id']){
				
				?>
				<script>
					alert("권한이 없습니다.");
					history.back();
				</script>

        <?php
                }else{
					
					$bno = $_GET[idx];
					$sql = mq("delete from comment where idx='$comment[idx]';");
		?>
				

		<script type="text/javascript">alert("삭제되었습니다.");</script>
		<meta http-equiv="refresh" content="0 url=/board/read.php?idx=<?php echo $comment["con_num"];?>" /> 
		
		<?php
				} 
		?>