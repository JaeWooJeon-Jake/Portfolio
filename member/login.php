<!DOCTYPE>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="../css/loginform.css">
	
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
      <form method = "POST" action = "login_action.php">
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
          </label><a href="member_find.php" class="form-recovery">아이디/비밀번호 찾기</a>
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