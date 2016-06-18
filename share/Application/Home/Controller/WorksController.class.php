<?php
namespace Home\Controller;
use Think\Controller;
class WorksController extends Controller {
    public function works(){
		$id=$_GET['id'];
    	$Works = M('artical') -> join('t_user on t_artical.userid = t_user.userid') -> where("ariticalid = '$id'") ->order("AriticalId DESC")->select();
		$this->assign("WorksMain",$Works);
//		var_dump($Works);exit;
    	$this->display();
    }

	public function showList(){
		$type = $_GET['type'];
		$Works = M('artical') -> join('t_user on t_artical.userid = t_user.userid') -> where("type = $type") ->order("AriticalId DESC")->select();
		$this->assign("WorksMain",$Works);
		$this->assign("type",$type);
    	$this->display('showUi');
	}

}