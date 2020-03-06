<?php
header("Content-Type: text/html; charset=UTF-8");
	 include "db/connect.php";
    $number = $_GET[number];
    $title = $_GET[title];
    $content = $_GET[content];
    $date = date('Y-m-d H:i:s');
    $query = "update board set title='$title', content='$content', date='$date' where number=$number";
    $result = $connect->query($query);
    if($result) {
?>
        <script>
            alert("수정되었습니다.");
            location.replace("./index.php");
        </script>
<?php    }
    else {
        echo "실패";
    }
?>
