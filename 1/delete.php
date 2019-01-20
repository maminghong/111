<?php 
	header('content-type:text/html;charset=utf-8');
	$id =$_GET['id'];
	include('db.php');
	$db = new Db();
	if($db -> delete('add',$id)){
		echo "<script>alert('删除成功');location.href='list.php';</script> ";
		die;
	}else{
		echo "<script>alert('删除失败');location.href='list.php';</script> ";
		die;
	}
 ?>