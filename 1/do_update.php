<?php 
	header('content-type:text/html;charset=utf-8');
	include('db.php');
	$data = $_POST;
	$db = new Db('db.php');
	if($db -> update('add',$data)){
		echo 1;
	}else{
		echo 0;
	}
 ?>