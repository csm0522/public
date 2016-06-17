<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$Works = M('artical') -> join('t_user on t_artical.userid = t_user.userid') -> where('upLoadType = 1') ->select();
    	$Artical = M('artical') -> join('t_user on t_artical.userid = t_user.userid') -> where('upLoadType = 2') ->select();
		$this->assign("Workslist",$Works);
//		var_dump($Works);exit;
		$this->assign("Articallist",$Artical);
    	$this->display('');
    }
}


