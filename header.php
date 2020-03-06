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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

		</body>
		</html>