<?php
	 include "header.php";
	$id= $_SESSION['userid'];
	$sql = mq("select name from member where id='".$id."'");
	$member = $sql->fetch_array();
	 echo $member[name];
?>