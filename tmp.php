<?php
$connect = mysql_connect("localhost", "kyt9600", "apvmfwodn12!") or die("접속불가");
mysql_select_db("kyt9600");

$data = mysql_query("SELECT idx FROM board ORDER BY idx DESC");
$num = mysql_num_rows($data); // 총 게시글 개수


$page = ($_GET['page'])?$_GET['page']:0; //시작 페이지
$list = 10; // 화면에 보여줄 게시글 개수
$block = 3; // 페이지 버튼 개수

$query = "select * from board order by idx desc limit $page,$list";
$result = mysql_query($query, $connect);


?>

<!DOCTYPE html>
 
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="/css/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
			while($data = mysql_fetch_array($result)){
		?>
			
				<tr>
				<th scope="row"><?echo $data['idx']?></th>
				<td><a href = "view.php?number=<?php echo $data['idx']?>">
                <?php echo $data['title']?>
				<td><?echo $data['id']?></td>
				<td><?echo $data['date']?></td>
				<td><?echo $data['hit']?></td>
				</tr>
		<?php
		} 
		?>
				
		</tbody>
       
        </table>
		</div>
 


    
     <button type="button" class="btn btn-primary" id="write" onclick="location.href='/write/write2.php'">글쓰기</button>
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

 