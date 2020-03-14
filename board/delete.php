<?php
	include $_SERVER['DOCUMENT_ROOT']."/db/connect.php";
	
	$bno = $_GET['idx'];
	$sql = mq("delete from board where idx='$bno';");
	 session_start();
                $URL = "/member/login.php";
                if(!isset($_SESSION['userid'])) {
        ?>
 
                <script>
                        alert("로그인이 필요합니다");
                        location.replace("<?php echo $URL?>");
                </script>
        <?php
                }
?>
<script type="text/javascript">alert("삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/" />
