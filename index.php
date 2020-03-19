<?php
$connect = mysql_connect("localhost", "kyt9600", "apvmfwodn12!") or die("접속불가");
mysql_select_db("kyt9600");

$data = mysql_query("SELECT idx FROM board ORDER BY idx DESC");
$num = mysql_num_rows($data); // 총 게시글 개수


$page = ($_GET['page'])?$_GET['page']:0; //시작 페이지
$list = 10; // 화면에 보여줄 게시글 개수
$block = 3; // 페이지 버튼 개수

$block_num = ceil($page/$block); // 현재 페이지 블록 구하기
$block_start = (($block_num - 1) * $block) + 1; // 블록의  시작번호
$block_end = $block_start + $block - 1; 
?>

<!DOCTYPE html>
 
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="/css/style.css">
		
</head>
 
<body>
	<?php include "header.php" ?>

	<div class = "title"><h2 align="center">자유 게시판</h2></div>
	<div class="table">
	<table class="table">

	  <thead>
		<tr>
		  <th scope="col">번호</th>
		  <th scope="col">제목</th>
		  <th scope="col">작성자</th>
		  <th scope="col">날짜</th>
		  <th scope="col">조회수</th>
		</tr>
	  </thead>
		
		<tbody>
		<?php 
			$sql = mq("select * from board order by idx desc limit $page,$list"); // board테이블에있는 idx를 기준으로 내림차순해서 5개까지 표시
            while($board = $sql->fetch_array())
            {
              $title=$board["title"]; 
              if(strlen($title)>30)
              { 
                $title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]); //title이 30을 넘어서면 ...표시
              }

			  $sql2 = mq("select * from comment where con_num='".$board['idx']."'"); //reply테이블에서 con_num이 board의 idx와 같은 것을 선택
              $rep_count = mysqli_num_rows($sql2); //num_rows로 정수형태로 출력
		?>
			
				<tr>
				<th scope="row"><?echo $board['idx']?></th>
				<td><a href="/board/read.php?idx=<?php echo $board["idx"];?>">
					<?php echo $board['title']?><span class="re_ct">[<?php echo $rep_count; ?>]</span></a></td>
				<td><?echo $board['name']?></td>
				<td><?echo $board['date']?></td>
				<td><?echo $board['hit']?></td>
				</tr>
		<?php
		} 
		?>
				
		</tbody>
       
        </table>
		</div>
 


    
     <button type="button" class="btn btn-primary" id="write" onclick="location.href='/board/write.php'">글쓰기</button>
	</br>
        </div>

<?php
$prev_page = $page-$list;
if($prev_page<=1){
	$prev_page = 0;
}

$next_page = $page+$list;
if($next_page >= $num){
	$next_page = $num-($num%$list);
}
?>  
	

<nav class="page" aria-label="Page navigation example">
  <ul class="pagination">
     <li class="page-item">
      <a class="page-link" href="<?=$PHP_SELF?>?page=<?=$prev_page?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>

	<?php
		
		$pageNum = ceil($num/$list); // 총 페이지 
		for ($p=0; $p<$pageNum; $p++) {
			$num = $list * $p; //페이지
			$b = $p+1; //버튼 번호
	?>

<li class="page-item">
<a class="page-link" href="<?=$PHP_SELF?>?page=<?=$num?>">
<? echo $b; ?></a>
</li>
   	
	<?php
		}
		?>

    <li class="page-item">
      <a class="page-link" href="<?=$PHP_SELF?>?page=<?=$next_page?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
	</ul>
</nav>


</body>
</html>

 