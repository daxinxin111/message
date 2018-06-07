<?php 	
header("content-type:text/html;charset=utf8");
mysql_connect("127.0.0.1","root","root");
mysql_select_db('user');
mysql_query("set names utf8");

$sql="select * from user";
$res=mysql_query($sql);
while ($arr=mysql_fetch_array($res)) {
	  $row[]=$arr;
}
 ?>

 <center>
		<table border="1">
			<tr>
				<td>id</td>
				<td>标题</td>
				<td>内容</td>
				<td>留言人</td>
				<td>操作</td>
			</tr>
			<?php foreach ($row as $key => $v): ?>
				<tr>
					<td><?php echo $v['id'] ?></td>
					<td><?php echo $v['title'] ?></td>
					<td><?php echo $v['content'] ?></td>
					<td><?php echo $v['author'] ?></td>
					<td><a href="del.php?id=<?php echo $v['id'] ?>">删除|</a><a href="update.php" id="<?php echo $v['id'] ?>">修改</a></td>
				</tr>
			<?php endforeach ?>
			
		</table>
	</center>




