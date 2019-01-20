<?php 
 header("content-type:text/html;charset=utf-8");
 include('db.php');
 $db = new Db();
 $data = $db ->select('add');
 ?>
 <style>
	.tr{
		background: #66ffcc;
	}
 </style>
 <table border="1" align="center">	
 	<tr>
 		<td><input type="checkbox"></td>
 		<td>编号</td>
 		<td>客户名称</td>
 		<td>负责人</td>
 		<td>公司电话</td>
 		<td>描述</td>
 		<td>操作</td>
 	</tr>
 	<?php foreach ($data as $k => $v): ?>
 		<?php if($k%2==0){echo "<tr>";}else{echo "<tr class ='tr'>";} ?>
 		<td><input type="checkbox" value="<?php echo $v['id'];?> "></td>
 		<td><?php echo $v['id'];?></td>
 		<td><?php echo $v['name'];?></td>
 		<td><?php echo $v['ren'];?></td>
 		<td><?php echo $v['tel'];?></td>
 		<td><?php echo $v['ms'];?></td>
 		<td>
 			<a href="./delete.php?id=<?php echo $v['id'];?>">删除</a>
 			<a href="./update.php?id=<?php echo $v['id'];?>">修改</a>
 		</td>
 		
 	<?php endforeach ?>
 </table>