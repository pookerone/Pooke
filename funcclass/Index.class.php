<?php
// Author: zbqyexingknog
// Creat Date: 2014.8
// Email: zbqyexingkong@163.com
// Github:https://github.com/zbqyxingkong

include_once ("../autoload.php");

class Index{
	private $result = array();


	public function __construct(){

	}

	public function getClassEvaluate(){

		$oper = new OperDB();

		$sql = "select ...... from ..... ";

		$ret = $oper->executeSQL($sql);

	}

	public function getResult(){
		return $this->$result;
	}

}