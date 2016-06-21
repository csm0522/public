<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$sessid = session('userInfo.UId');
    	$Works = M('artical') -> join('right join t_user on t_artical.userid = t_user.userid') -> where('upLoadType = 1 And status = 1')->order("AriticalId DESC") ->select();
//  	$likeNum = M('artical') ->join('right join t_like on t_artical.ariticalId = t_like.ariticalId')->select();
//  	var_dump($likeNum);exit;
    	$Artical = M('artical') -> join('t_user on t_artical.userid = t_user.userid') -> where('upLoadType = 2 And status = 1')->order("AriticalId DESC") ->select();
		for($i=0;$i<count($Works);$i++){
			$con['AriticalId']=$Works[$i]['ariticalid'];
			$Works[$i]['num']=M('like')->where($con)->count();
		}
		$userTX = M('user')-> where("loginid = '$sessid'")-> getfield('usertx');
		$username = M('user')-> where("loginid = '$sessid'")-> getfield('username');
		$user = M('user')->select();
		$this->assign("userlist",$user);
		$this->assign("Workslist",$Works);
		$this -> assign('userTX',$userTX);
		$this -> assign('username',$username);
		$this->assign("Articallist",$Artical);
    	$this->display('');
    }
public function _empty()
    {
		redirect(U('Error/index'));
    }
}


