<!DOCTYPE>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="/css/loginform.css">
</head>
<body>

<div class="form-panel two">
    <div class="form-header">
      <h1>회원 가입</h1>
    </div>
    <div class="form-content">
      <form method='get' action='register_action.php'>
        <div class="form-group">
          <label for="username">아이디</label>
          <input type="text" id="username" name="id" required="required"/>
        </div>
        <div class="form-group">
          <label for="password">비밀번호</label>
          <input type="password" id="password" name="pw" required="required"/>
        </div>
        <div class="form-group">
          <label for="cpassword">비밀번호 확인</label>
          <input type="password" id="cpassword" name="pw2" required="required"/>
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