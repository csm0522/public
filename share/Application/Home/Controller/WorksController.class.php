<?php
namespace Home\Controller;
use Think\Controller;
class WorksController extends Controller {
    public function works(){
		$id=$_GET['id'];
    	$Works = M('artical') -> join('t_user on t_artical.userid = t_user.userid') -> where("ariticalid = '$id'") ->order("AriticalId DESC")->select();
		$clickNum = M('artical') -> where("ariticalid = '$id'") ->setInc('clickNum');
//		$userTX = M('artical') -> join('t_user on t_artical.userid = t_user.userid')-> where("loginid = '$id'")-> getfield('usertx');
		$userTX = M('artical') -> join('right join t_user on t_artical.userid = t_user.userid')-> join('right join t_login on t_user.loginid = t_login.loginid')-> where("ariticalid = '$id'") -> getfield('usertx');
		$this->assign("WorksMain",$Works);
		$this -> assign('userTX',$userTX);
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