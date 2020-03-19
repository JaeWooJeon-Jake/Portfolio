$(document).ready(function(){
$("#rep_bt").click(function(){
		$.post("reply_ok.php",{
						bno:$(".bno").val(),
						dat_user:$(".dat_user").val(),
						dat_pw:$(".dat_pw").val(),
						content:$(".reply_content").val(),
					},	
					function(data,success){
						if(success=="success"){
							$(".reply_view").html(data);
							alert("댓글이 작성되었습니다");	
						}else{
							alert("댓글작성이 실패되었습니다");
						}
					});
				});

});