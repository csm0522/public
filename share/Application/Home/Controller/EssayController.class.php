<?php
namespace Home\Controller;
use Think\Controller;
class EssayController extends Controller {
    public function index(){
    	$Artical = M('artical') -> join('t_user on t_artical.userid = t_user.userid') -> where('upLoadType = 2 And status = 1') ->order("AriticalId DESC")->select();
		$artrang=M('artical')->where("uploadType = 2")->order('clickNum DESC')->limit(4)->select();
		$con['uploadType']=2;
		$con['RepTag']=array("NEQ",1);
    	$Artical = M('artical') -> join('t_user on t_artical.userid = t_user.userid') -> where($con) ->order("AriticalId DESC")->select();
		$artrang=M('artical') -> where($con) -> order('clickNum DESC')->limit(4)->select();
//		dump($artrang);
		$this->assign("Articallist",$Artical);
		$this->assign("artrange",$artrang);
    	$this->display('');
    }
	public function essay(){
		$id=$_GET['id'];
		$cons['ariticalid']=$id;
    	$Artical = M('artical') -> join('t_user on t_artical.userid = t_user.userid') -> where("ariticalid = '$id'")->select();
		$clickNum = M('artical') -> where("ariticalid = '$id'") ->setInc('clickNum');
		$con3['AriticalId'] = $id;
		$data['num'] = M('like')->where($con3)->count();
		$mag=M('artical_comment')->join('t_user on t_artical_comment.userid = t_user.userid')->where("ariticalid = '$id'")->order("ACommendId DESC")->select();
//		dump($mag);
		$this->assign("nums",$data);
		$this->assign("comment",$mag);
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
	public function addcomment(){
		$sessid = session('userInfo.UId');
		if(!empty($sessid)){
			$con2['LoginId']=$sessid;
			$con['UserId'] = M('user')->where($con2)->getField(UserId);
			$con['AriticalId']=$_POST['id'];
			$con['content']=$_POST['comment'];
			$con['CreatTime'] = Date('Y-m-d H:i:s');

			if(M('artical_comment')->add($con)){
				$data=0;
//				redirect(U('User/login'));
			}
			else{
				$data=1;
			}
		}
		else{
			echo "<script>alert('"."请先登陆"."');</script>";
			$data=1;
		}
		$this->ajaxReturn($data);
	}
	public function report(){
		$sessid = session('userInfo.UId');
		if(!empty($sessid)){
			$con2['LoginId']=$sessid;

			$con['RepUserid'] = M('user')->where($con2)->getField(UserId);
			$con['AriticalId']=$_GET['id'];
			$con['RepTag']=2;
			if(M('artical')->save($con)){
				$data['msg']="举报成功,等待管理员审核";
//				redirect(U('User/login'));
			}
			else{
				$data['msg']="正在等待管理员审核";
			}
		}
		else{
			$data['msg']="请先登录";
		}
		$this->ajaxReturn($data);
	}

}