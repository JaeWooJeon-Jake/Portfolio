<?php 
  include $_SERVER['DOCUMENT_ROOT']."/header.php";
  if(isset($_SESSION['userid'])){
    echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
  }else{ ?>

<!DOCTYPE html>

<head>
<meta charset="utf-8" />
<title>회원가입 폼</title>
</head>

<body>
 

  <div class="find">
	<form method="post" action="member_find_id.php">
      <h1>회원계정 찾기</h1>
      <p><a href="/">홈으로</a></p>
        <fieldset>
          <legend>아이디 찾기</legend>
            <table>
              <tr>
                <td>이름</td>
                <td><input type="text" size="35" name="name" placeholder="이름"></td>
              </tr>
              <tr>
                <td>이메일</td>
                <td><input type="text" name="email">@<input type="text" name="emadrress">
              </tr>
            </table>
          <input type="submit" value="아이디 찾기" />
      </fieldset>
    </form>
  </div>
  <div class="find">
      <form method="post" action="member_find_pw.php">
        <fieldset>
          <legend>비밀번호 찾기</legend>
            <table>
              <tr>
                <td>아이디</td>
                <td><input type="text" size="35" name="userid" placeholder="아이디"></td>
				</tr>
				<tr>
				<td>이름</td>
				<td><input type="text" size="35" name="username" placeholder="이름"></td>
				</tr>
            </table>
          <input type="submit" value="비밀번호 찾기" />
      </fieldset>
    </form>
  </div>
</body>
</html>
<?php } ?>