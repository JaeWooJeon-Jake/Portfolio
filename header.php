<!DOCTYPE>
<html>
<head>
<meta charset = "utf-8">
<link rel="stylesheet" type="text/css" href="/css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<div class="logo"><a href="/index.php"><img src="/img/logo.png" width="100" height="50" alt="logo"></img></a></div>
<?php

	include $_SERVER['DOCUMENT_ROOT']."/db/connect.php";
	session_start();
	
	if(isset($_SESSION['userid'])) {
		
		echo '<div id="user"><font size>'.$_SESSION['username'];'</font>'?>님 안녕하세요
		<button type="button" class="btn btn-primary" id="login" onclick="location.href='/member/logout.php'">로그아웃</button>
		<button type="button" class="btn btn-primary"onclick="location.href='/member/member_edit.php'">
		마이페이지</button></div>
		</br><hr>
	<?php
	}
	else{
?> <button type="button" class="btn btn-primary" id="user" onclick="location.href='/member/login.php'">로그인</button>
	</br><hr>
	<?php	
		}
     ?>

<div class="search">
<nav class="navbar navbar-light bg-light">
  <form class="form-inline"  id="search" action="/board/search_result.php" method="get">
   <select name="catgo" class="form-control mr-sm-2">
        <option value="title">제목</option>
        <option value="name">작성자</option>
        <option value="content">내용</option>
      </select>
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">검색</button>
  </form>
</nav>
</div>
		</body>
		</html>