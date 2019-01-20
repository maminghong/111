<?php 
header('content-type:text/html;charset=utf-8');
$id = $_GET['id'];
include('db.php');
$db = new Db();
$arr =$db -> selectone('add',$id);
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<table>
		<tr>
			<td>客户名称：</td>
			<td><input type="text" name="name" id="name" value="<?php echo $arr['name']; ?> "></td>
		</tr>
		<tr>
			<td>负责人：</td>
			<td><input type="text" name="ren" id="ren" value="<?php echo $arr['ren']; ?> "></td>
		</tr>
		<tr>
			<td>公司电话：</td>
			<td><input type="text" name="tel" id="tel" value="<?php echo $arr['tel']; ?> "></td>
		</tr>
		<tr>
			<td>描述：</td>
			<td><input type="text" name="ms" id="ms" value="<?php echo $arr['ms']; ?> "></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
			<input type="button" value="修改" id="btn">
			<input type="hidden" value="<?php echo $arr['id'];?>" id='id'>
			</td>
		</tr>
	</table>
 </body>
 </html>
 <script src='jq.js'></script>
 <script>
 	$(function(){
 		$('#btn').click(function(){
 			if(confirm('你确定修改吗?')){
 				var name = $('#name').val();
 				var ren = $('#ren').val();
 				var tel = $('#tel').val();
 				var ms = $('#ms').val();
 				var id = $('#id').val();
 				$.post('do_update.php',{id:id,name:name,ren:ren,tel:tel,ms:ms},function(res){
 					if(res == 1){
 						alert('修改成功');
 						location.href ='list.php';
 					}else{
 						alert('修改失败');
 					}
 				})
 			}
 		})
 	})
 </script>