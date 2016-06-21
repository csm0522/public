<?php
namespace Home\Controller;
use Think\Controller;
class WorksController extends Controller {
    public function works(){
		$id=$_GET['id'];
    	$Works = M('artical') -> join('t_user on t_artical.userid = t_user.userid') -> where("ariticalid = '$id'") ->order("AriticalId DESC")->select();
		$clickNum = M('artical') -> where("ariticalid = '$id'") ->setInc('clickNum');
		$userTX = M('artical') -> join('right join t_user on t_artical.userid = t_user.userid')-> join('right join t_login on t_user.loginid = t_login.loginid')-> where("ariticalid = '$id'") -> getfield('usertx');

		$this->assign("WorksMain",$Works);
		$this -> assign('userTX',$userTX);

		$con3['AriticalId'] = $id;
		$data['num'] = M('like')->where($con3)->count();
		//评论
		$mag=M('artical_comment')->join('t_user on t_artical_comment.userid = t_user.userid')->where("ariticalid = '$id'")->order("ACommendId DESC")->select();
//		dump($mag);
		$this->assign("nums",$data);
		$this->assign("comment",$mag);
    	$this->display();
    }
public function _empty()
    {
		redirect(U('Error/index'));
    }
	public function showList(){
		$type = $_GET['type'];
		$Works = M('artical') -> join('t_user on t_artical.userid = t_user.userid') -> where("type = $type And status = 1") ->order("AriticalId DESC")->select();
		$type =$_GET['type'];
		$con['type']=$_GET['type'];
		$con['RepTag']=array("NEQ",1);

		$Works = M('artical') -> join('t_user on t_artical.userid = t_user.userid') -> where($con) ->order("AriticalId DESC")->select();
		for($i=0;$i<count($Works);$i++){
			$con['AriticalId']=$Works[$i]['ariticalid'];
			$Works[$i]['num']=M('like')->where($con)->count();
		}
		$this->assign("WorksMain",$Works);
		$this->assign("type",$type);
    	$this->display('showUi');
	}

	public function upwork(){
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