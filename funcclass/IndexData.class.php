<?php
// Author: zbqyexingknog
// Creat Date: 2014.8
// Email: zbqyexingkong@163.com
// Github:https://github.com/zbqyxingkong

include_once ("../autoload.php");

class IndexData{
	private $result ;


	public function __construct(){
		$this->result = array();
	}

/**
 *  为主页面获取数据库courses表中的数据; 数据有：课程名， 课程图片路径，观看人数，好评人数
 * @param  [type] $courseName 传入页面所展示的课程名称的数组
 * @return [type]           true:获取数据成功，false：获取数据失败.
 */
	public function getClassEvaluate($courseName){

		$k = 0;
		$oper = new OperDB();
		for($i = 0; $i < count($courseName); $i++){
		$sql = "select name,watch_man,good_man,pic_path,pic_name from courses  where name = '$courseName[$i]'";
		// echo $sql;
		$ret = $oper->executeSQL($sql);
		// print_r($ret);
		if (is_array($ret)){
			$ret[0]['pic_path'] = $ret[0]['pic_path'].'/'.$ret[0]['pic_name'];
			// print_r($ret);
			$this->result[$k] = $ret[0];
			$k++;
		}else
			return false;
	}

		return true;
}

	public function getResult(){
		return $this->result;
	}

}