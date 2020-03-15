<?php 
  include $_SERVER['DOCUMENT_ROOT']."/header.php";
?>

<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>

<body>
<?php
 
  /* 검색 변수 */
  $catagory = $_GET['catgo'];
  $search_con = $_GET['search'];
?>

  <div class="title"><h1 align="center"><?php echo $catagory; ?>에서 '<?php echo $search_con; ?>'검색결과</h1></div>
  
<div id="board_area" class="table"> 
<!-- 18.10.11 검색 추가 -->

    <table class="table">
      <thead>
          <tr>
              <th scope="col">번호</th>
                <th scope="col">제목</th>
                <th scope="col">작성자</th>
                <th scope="col">날짜</th>
                <th scope="col">조회수</th>
            </tr>
        </thead>
        <?php
          $sql2 = mq("select * from board where $catagory like '%$search_con%' order by idx desc");
          while($board = $sql2->fetch_array()){
           
          $title=$board["title"]; 
            if(strlen($title)>30)
              { 
                $title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]);
              }
           // $sql3 = mq("select * from reply where con_num='".$board['idx']."'");
            //$rep_count = mysqli_num_rows($sql3);
        ?>
      <tbody>
        <tr>
          <td><?php echo $board['idx']; ?></td>
          <td>
            <?php 
              $lockimg = "<img src='/img/lock.png' alt='lock' title='lock' with='20' height='20' />";
              if($board['lock_post']=="1")
              { ?><a href='/page/board/ck_read.php?idx=<?php echo $board["idx"];?>'><?php echo $title, $lockimg;
              }else{?>

        <!--- 추가부분 18.08.01 --->
        <?php
          $boardtime = $board['date']; //$boardtime변수에 board['date']값을 넣음
          $timenow = date("Y-m-d"); //$timenow변수에 현재 시간 Y-M-D를 넣음
          
          if($boardtime==$timenow){
            $img = "<img src='/img/new.png' alt='new' title='new' />";
          }else{
            $img ="";
          }
          ?>
        <!--- 추가부분 18.08.01 END -->
        <a href='/board/read.php?idx=<?php echo $board["idx"]; ?>'><span style="background:yellow;"><?php echo $title; }?></span><span class="re_ct">[<?php echo $rep_count;?>]<?php echo $img; ?> </span></a></td>
          <td><?php echo $board['name']?></td>
          <td><?php echo $board['date']?></td>
          <td><?php echo $board['hit']; ?></td>

        </tr>
      </tbody>

      <?php } ?>
    </table>
</div>
<h4 style="margin-top:30px; margin-left: 75%;"><a href="/">홈으로</a></h4>
</body>
</html>