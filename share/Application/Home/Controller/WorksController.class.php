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
	 public function showUi(){
    	$this->display();
    }
	 public function showGdesign(){
    	$this->display();
    }
	 public function showCaitoon(){
    	$this->display();
    }
}