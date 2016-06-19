<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$sessid = session('userInfo.UId');
    	$Works = M('artical') -> join('t_user on t_artical.userid = t_user.userid') -> where('upLoadType = 1')->order("AriticalId DESC") ->select();
    	$Artical = M('artical') -> join('t_user on t_artical.userid = t_user.userid') -> where('upLoadType = 2') ->select();
		$userTX = M('user')-> where("loginid = '$sessid'")-> getfield('usertx');
		$username = M('user')-> where("loginid = '$sessid'")-> getfield('username');
		$this->assign("Workslist",$Works);
		$this -> assign('userTX',$userTX);
		$this -> assign('username',$username);
		$this->assign("Articallist",$Artical);
    	$this->display('');
    }
}


