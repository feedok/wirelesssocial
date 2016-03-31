<?php 

/**
* class for db connetion
*/
class db_conn
{
	private $auth_data; //auth data for connection to mysql database
	private $link;

	public function __construct()
	{
		$db_settings_path = __DIR__.'/../db.conn.ini';
		if (file_exists($db_settings_path)){
			$auth_data = parse_ini_file($db_settings_path, true);
			$this->link = mysqli_connect($auth_data['host'],$auth_data['user'],$auth_data['password'],$auth_data['db_name']) or 
				die("DB Connection error");
			mysqli_set_charset($this->link, 'utf8');
		} else{
			die("Connection refused. File open error");
		}
	}

	public function query($sql='')
	{
		return mysqli_query($this->link, $sql)
			or die(mysqli_error($this->link));
	}

	public function get_query($sql="SELECT * FROM `user_visit` WHERE 0")
	{
		$ret = mysqli_query($this->link, $sql)or 
			die(mysqli_error($this->link));
		$res = array();

		while ($row = mysqli_fetch_object($ret)){
			$res[] = $row;
		}

		return $res;
	}

	public function __destruct()
	{
		mysqli_close($this->link) or
			die(mysqli_error($this->link));
	}
}
