<?php
namespace Home\Controller;
use Think\Controller;
class EssayController extends Controller {
    public function index(){
    	$Artical = M('artical') -> join('t_user on t_artical.userid = t_user.userid') -> where('upLoadType = 2') ->order("AriticalId DESC")->select();
		$this->assign("Articallist",$Artical);
    	$this->display('');
    }
	public function essay(){
		$id=$_GET['id'];
    	$Artical = M('artical') -> join('t_user on t_artical.userid = t_user.userid') -> where("ariticalid = '$id'") ->select();
		$clickNum = M('artical') -> where("ariticalid = '$id'") ->setInc('clickNum');
		$con3['AriticalId'] = $id;
		$data['num'] = M('like')->where($con3)->count();
		$this->assign("nums",$data);
		$this->assign("ArticalMain",$Artical);
//		var_dump($Works);exit;
    	$this->display();
//		dump($$Artical)
	}

	public function upessay(){
		$sessid = session('userInfo.UId');
		if(!empty($sessid)){
			$con2['LoginId']=$sessid;
			$con['UserId'] = M('user')->where($con2)->getField(UserId);
			$con['AriticalId']=$_GET['id'];
			if(M('like')->where($con)->count() >0){
				$data['num']="您已关注~";
			}
			else {
				$re = M('like')->add($con);
				$con3['AriticalId'] = $con['AriticalId'];
				$data['num'] = M('like')->where($con3)->count();
			}
		}
		else{
			echo "<script>alert('"."请先登陆"."');</script>";
			redirect(U('User/login'));
		}
		$this->ajaxReturn($data);
	}

}