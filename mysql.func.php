<?php 
	//数据库链接信息封装，保存
	function connects($config){
		$link=mysql_connect($config['host'],$config['username'],$config['password'],$config['dbName']) or die("数据库链接失败,检测数据库链接信息");
		mysql_set_charset($config['charset']);
		mysql_select_db($config['dbName']);
		//mysql_select_db("test");//打开指定数据库
		return $link;
	}
	$config = array("host" => "localhost","username"=>"root","dbName"=>"hao","charset"=>"utf8","password"=>"root");
	connects($config);
 ?>
