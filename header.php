<!DOCTYPE>
<html>
<head>
<meta charset = "utf-8">
<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
<div class="logo"><a href="index.php"><img src="/img/logo.png" width="100" height="50" alt="logo"></img></a></div>
<?php
    include "db/connect.php";

	session_start();
	
	if(isset($_SESSION['userid'])) {
		
		echo '<div id="user"><font size>'.$_SESSION['userid'];'</font>'?>님 안녕하세요
		<button type="button" class="btn btn-primary" id="login" onclick="location.href='/member/logout.php'">로그아웃</button></div>
		</br><hr>
<?php
	}
	else{
?> <button type="button" class="btn btn-primary" id="user" onclick="location.href='/member/login.php'">로그인</button>
	</br><hr>
<?php	
	}
     ?>

<nav class="navbar navbar-light bg-light">
  <form class="form-inline"  id="search">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>

		</body>
		</html>