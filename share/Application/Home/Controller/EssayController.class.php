<?php
namespace Home\Controller;
use Think\Controller;
class EssayController extends Controller {
    public function index(){
    	$Artical = M('artical') -> join('t_user on t_artical.userid = t_user.userid') -> where('upLoadType = 2') ->select();
		$this->assign("Articallist",$Artical);
    	$this->display('');
    }
}