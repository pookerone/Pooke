<?php
// Author: zbqyexingknog
// Creat Date: 2014.8
// Email: zbqyexingkong@163.com
// Github:https://github.com/zbqyxingkong

include_once("../autoload.php");

class productData{
	private $restArray;


	public function __construct(){
		$this->restArray  = array();

	}

	public function getAllCourse(){
		$oper = new OperDB();

		$sql = "select lecturer_id,name,watch_man,good_man,pic_path,pic_name from courses ";
		$ret = $oper->executeSQL($sql);

		if (is_array($ret)){
			foreach ($ret as $key => $value) {
				$sql = "select name from lecturers where lecturer_id = $value['lecturer_id']";
				$lectName = $oper->executeSQL($sql);
				if (is_array($lectName)){
					$ret['lecturer_id'] = 
				}
			}
		}else{
			$this->restArray = false;	
		}


	}
}


?>