<?php 
include('db.php');
$data =$_POST;
$db =new Db();
$a = $db->add('add',$data);
if($a){
	echo 1;
}else{
	echo 0;
}
?>
