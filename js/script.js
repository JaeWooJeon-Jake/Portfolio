 function checkid(){
	var userid = document.getElementById("userid").value;
	if(userid)
	{
		url = "id_check.php?userid="+userid;
			window.open(url,"chkid","width=300,height=100, left=800, top=300");
		}else{
			alert("아이디를 입력하세요");
		}
	}  //팝업을 이용한 아이디 중복 

