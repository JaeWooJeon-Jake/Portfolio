<?php
	include $_SERVER['DOCUMENT_ROOT']."/db/connect.php";
	
	$bno = $_GET['idx'];
	$sql = mq("select * from board where idx='".$bno."'"); /* 받아온 idx값을 선택 */
	$board = $sql->fetch_array();

	echo $board[name]; 
	session_start();

                $URL = "/member/login.php";
                if(!isset($_SESSION['userid'])) {
        ?>
 
                <script>
                        alert("로그인이 필요합니다");
                        location.replace("<?php echo $URL?>");
                </script>
		<?php 
				}else if($_SESSION['userid']!= $board['id']){
				
				?>
				<script>
					alert("권한이 없습니다.");
					location.replace("/index.php");
				</script>

        <?php
                }else{
					
					$bno = $_GET['idx'];
					$sql = mq("delete from board where idx='$bno';");
		?>
				
		<?php
				}
		?>
<script type="text/javascript">alert("삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/" /> 
