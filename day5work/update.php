<?php 
header("content-type:text/html;charset=utf8");
mysql_connect("127.0.0.1","root","root");
mysql_select_db('user');
mysql_query("set names utf8");

$id=$_GET['id'];
$sql="select * from user where id='$id'";
$res=mysql_query($sql);
$mysql_fetch_array($res);
 ?>


 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言板</title>
</head>
<body>
	<form action="update.php" method="post">
	<center>
		<table border="1">
			<tr>
				<td>标题</td>
				<td><input type="text" name="title" value=""></td>
			</tr>
			<tr>
				<td>内容</td>
				<td><input type="textarea" name="content"></td>
			</tr>
			<tr>
				<td>留言人</td>
				<td><input type="text" name="author"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="提交"></td>
			</tr>
		</table>
	</center>
	</form>
</body>
</html>

