<?php
namespace Home\Controller;
use Think\Controller;
class WorksController extends Controller {
    public function works(){
		$id=$_GET['id'];
    	$Works = M('artical') -> join('t_user on t_artical.userid = t_user.userid') -> where("ariticalid = '$id'") ->select();
		$this->assign("WorksMain",$Works);
//		var_dump($Works);exit;
    	$this->display();
    }

	public function showList(){
		$type = $_GET['type'];
		$Works = M('artical') -> join('t_user on t_artical.userid = t_user.userid') -> where("type = $type") ->select();
		$this->assign("WorksMain",$Works);
		var_dump($Works);exit;
    	$this->display();
	}
//	 public function showUi(){
//  	$Works = M('artical') -> join('t_user on t_artical.userid = t_user.userid') -> where("type = 1") ->select();
//		$this->assign("WorksMain",$Works);
//		var_dump($Works);exit;
//
//  	$this->display();
//  }
//	 public function showGdesign(){
//  	$Works = M('artical') -> join('t_user on t_artical.userid = t_user.userid') -> where("type = 2") ->select();
//		$this->assign("WorksMain",$Works);
//		var_dump($Works);exit;
//
//  	$this->display();
//  }
//	 public function showCaitoon(){
//  	$Works = M('artical') -> join('t_user on t_artical.userid = t_user.userid') -> where("type = 3") ->select();
//		$this->assign("WorksMain",$Works);
//		var_dump($Works);exit;
//
//  	$this->display();
//  }
}