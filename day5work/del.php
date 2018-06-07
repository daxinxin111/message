<?php 	
header("content-type:text/html;charset=utf8");
mysql_connect("127.0.0.1","root","root");
mysql_select_db('user');
mysql_query("set names utf8");

$id=$_GET['id'];

$sql="delete  from user where id='$id'";
$res=mysql_query($sql);

if($res)
{
   echo "<script>alert('删除成功');window.location.href='show.php'</script>";
}
else
{
   echo "<script>alert('删除失败');window.location.href='show.php'</script>";
}

 ?>