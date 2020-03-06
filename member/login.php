<!DOCTYPE>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="../css/loginform.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<?php include "../header.php" ?>

<div class="form">
  <div class="form-toggle"></div>
  <div class="form-panel one">
    <div class="form-header">
      <h1>로그인</h1>
    </div>
    <div class="form-content">
      <form method = "GET" action = "login_action.php">
        <div class="form-group">
          <label for="username">아이디</label>
          <input type="text" id="username" name="id" required="required"/>
        </div>
        <div class="form-group">
          <label for="password">비밀번호</label>
          <input type="password" id="password" name="pw" required="required"/>
        </div>
        <div class="form-group">
          <label class="form-remember">
            <input type="checkbox"/>ID 기억하기
          </label><a href="#" class="form-recovery">비밀번호를 잊으셨나요?</a>
        </div>
        <div class="form-group">
          <button type="submit">로그인</button>
        </div>
		<p align="center"><a href="register.php" class="form-recovery">회원가입</a><p>
      </form>
    </div>
  </div>
  


</body>
</html>