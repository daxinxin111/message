<?php 
class db
{
	static private $dbcon = false;

	private function __construct()
	{
        $dbcon=mysql_connect('127.0.0.1','root','root');
        mysql_select_db('user',$dbcon) or die("mysql connect error");
        mysql_query('set names utf8');
	}

	private function __clone()
	{

	}

	public static function getInstance()
	{
         if(self::$dbcon==false)
         {
             self::$dbcon=new self;
         }
         return self::$dbcon;
	}

	public function query($sql)
	{
         return mysql_query($sql);
	}

	public function getOne($sql)
	{
         //select count(*) from
         $query=$this->query($sql);
         return mysql_result($query,0);
	}

	public function getRow($sql,$type='assoc')
	{
         $query=$this->query($sql);
         $funcname="mysql_feach_".$type;

         return $funcname($query);
	}

	public function getAll()
	{

	}

	public function insert()
	{

	}

	public function update()
	{

	}

	public function delete()
	{

	}

	public function select()
	{

	}
}

//echo db::dbcon;
$db=db::getInstance();


$db->query($sql);
$db->getOne($sql);
 ?>