<?php 
class Db{
	public $db;
	public function __construct(){
	$this-> db = new PDO("mysql:host =127.0.0.1;dbname=yes",'root','root');
	}
	public function add($table,$data){
		$key ='';
		$val ='';
		foreach ($data as $k => $v) {
			$key .="`$k`".',';
			$val .="'$v'".',';
		}
		$key=trim($key,',');
		$val=trim($val,',');
		return $this -> db -> exec("insert into `$table`($key) values($val)");
	}
	public function select($table){
		$arr =$this -> db -> query("select * from `$table` where is_show='1'")-> fetchAll(PDO::FETCH_ASSOC);
		return $arr;
	}
	public function delete($table,$id){
		return $this-> db -> exec("update `$table` set is_show='0' where id ='$id'");
	}
	public function selectone($table,$id){
		$arr =$this-> db -> query("select * from `$table` where id ='$id'")-> fetch(PDO::FETCH_ASSOC);
		return $arr;
	}
	public function update($table,$data){
		$str ='';
		foreach ($data as $k => $v) {
			if($k =='id'){
				$id = $v;
			}else{
				$str .="`$k` = '$v',";
			}
		}
		$str =rtrim($str,',');
		$sql ="update `$table` set $str where id ='$id'";
		$a = $this -> db -> exec("update `$table` set $str where id ='$id'");
		return $a;
	}
}

 ?>
