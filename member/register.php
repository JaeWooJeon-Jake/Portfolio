<?php include "../header.php" ?>
<!DOCTYPE>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="/css/loginform.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="../js/script.js"></script>
</head>

<body>


<div class="register">
    <div class="form-header">
      <h1>회원 가입</h1>
    </div>
    <div class="form-content">
      <form method='post' action='register_action.php' >
        <div class="userid">
          <label for="username">아이디</label>
          <input type="text" id="userid" name="userid" required="required" class="check"/>
		  </div>
		  <div class=id_ck>
		  <input type="button" value="중복검사" onclick="checkid();"/>
		  <input type="hidden" value="0" name="chs" />
		  </div>
        <div class="form-group">
          <label for="password">비밀번호</label>
          <input type="password" id="password" name="userpw" required="required"/>
        </div>
        <div class="form-group">
          <label for="cpassword">비밀번호 확인</label>
          <input type="password" id="cpassword2" name="userpw2" required="required"/>
        </div>
		   <div class="form-group">
          <label for="name">이름</label>
          <input type="text" id="username" name="username" required="required"/>
        </div>
        <div class="form-group">
          <label for="email">이메일 주소</label>
          <input type="email" id="email" name="email" required="required"/>
        </div>
        <div class="form-group">
          <button type="submit">회원가입</button>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>