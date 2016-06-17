<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$sessid = session('userInfo.UId');
    	$Works = M('artical') -> join('t_user on t_artical.userid = t_user.userid') -> where('upLoadType = 1') ->select();
    	$Artical = M('artical') -> join('t_user on t_artical.userid = t_user.userid') -> where('upLoadType = 2') ->select();
		$userTX = M('user')-> where("loginid = '$sessid'")-> getfield('usertx');
		$this->assign("Workslist",$Works);
		$this -> assign('userTX',$userTX);
		$this->assign("Articallist",$Artical);
    	$this->display('');
    }
}


