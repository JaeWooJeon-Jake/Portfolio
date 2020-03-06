<?php
$connect = mysql_connect("localhost", "kyt9600", "apvmfwodn12!") or die("접속불가");
mysql_select_db("kyt9600");

$data = mysql_query("SELECT number FROM board ORDER BY number DESC");
$num = mysql_num_rows($data); // 총 게시글 개수


$page = ($_GET['page'])?$_GET['page']:0; //시작 페이지
$list = 5; // 화면에 보여줄 게시글 개수
$block = 3; // 페이지 버튼 개수

$query = "select * from board order by number desc limit $page,$list";
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
				<th  scope="row"><?echo $data['number']?></th>
				<td><?echo $data['title']?></td>
				<td><?echo $data['id']?></td>
				<td><?echo $data['date']?></td>
				<td><?echo $data['hit']?></td>
				</tr>
		<?php
		} 
		?>
				
		</tbody>
       
        </table>
 


    
     <button type="button" class="btn btn-primary" id="write" onclick="location.href='/write.php'">글쓰기</button>
	</br>
        </div>
<?php
$pageNum = ceil($num/$list); // 총 페이지 3

for ($p=0; $p<$pageNum; $p++) {
	$num = $list * $p;
	$b = $p+1;
	echo "<a href=$PHP_SELF?page=$num>[$b]</a>";

?>
	
   
<?php
}
?>


</body>
</html>
