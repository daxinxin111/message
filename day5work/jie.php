<?php 
header("content-type:text/html;charset=utf8");
mysql_connect("127.0.0.1","root","root");
mysql_select_db('user');
mysql_query("set names utf8");

$title=$_POST['title'];
$content=$_POST['content'];
$author=$_POST['author'];

$sql="insert into user(title,content,author) values('$title','$content','$author')";

$result = mysql_query($sql);
if($result)
{
	echo "<script>alert('留言成功');window.location.href='show.php'</script>";

}
else
{
	echo "<script>alert('留言失败');window.location.href='show.php'</script>";
}



 ?>