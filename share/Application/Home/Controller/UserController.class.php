<?php

namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
	public function index() {
		$this -> display();
	}

	/**
	 * 用户登录
	 */
	public function loginPage() {
		if(!empty(session('userInfo'))){
			$this -> display('Index/index');
		}
		else if(empty(session('userInfo'))){

			$this -> display('User/login');
		}
	}
	public function pshWorksPag() {
		if(!empty(session('userInfo'))){
				$this -> display('User/pshWorks');
			}
		else if(empty(session('userInfo'))){
				$this -> display('User/login');
			}
	}
	public function pshArtPag() {
		$this -> display('User/pshAritical');
	}
	public function login() {
		 if(IS_POST){
			$name = $_POST['login_un'];
			$pwd = md5($_POST['login_pwd']);
			//echo "<script>alert('$pwd');</script>";
			$loginModel = new \Home\Model\UserModel();
			if ($loginModel -> login($name, $pwd)) {
				$user=D('login')->where("LoginName='$name'")->select();
				$arr=array('user'=>$user[0]['loginname'], 'UId'=>$user[0]['loginid'], );
				session(array('name'=>'userInfo'));
				session('userInfo',$arr);
				$this -> display('Index/index');
			} else {
				echo "<script>alert('error');</script>";
			}
			$this -> display('Index/index');
		}
	}
	/*
	 * 用户注销
	 */
	public function logout() {
		session(null);
		if(empty(session('userInfo')))
		{
			redirect(U('User/loginPage'), 0, '正在退出登录...');
		}
	}
	/*
	 * 用户注册
	 */

	function CheckExist($username)
	{
		$model = M('login');
		$condition['LoginName'] = $username;
		if ($model->where($condition)->count() > 0) {
			$flag = true;
		} else {
			$flag = false;
		}
		return $flag;
	}
	public function register()
	{

		$model = new \Think\Model();
		$model->startTrans();//事务开始

		$xinxi = M('login');
		$verify = new \Think\Verify();
		$v = $verify->check($_POST['Reg_verify']);
		if ($_POST) {
			if ($v) {
				if (!$this->CheckExist(I('Reg_un'))) {
					switch (I('UserTag')) {
						case 'per':
							$LoginTag = 1;
							break;
						case 'bus':
							$LoginTag = 2;
							break;
					}
					$arr['addtime'] = Date('Y-m-d H:i:s');
					$data = array('LoginName' => I('Reg_un'), 'LoginPwd' => md5(I('Reg_pwd')), 'LoginStatus' => 0, 'LoginTag' => $LoginTag, 'regDate' => $arr['addtime']);
					if ($xinxi->data($data)->add()) {
						$model->commit();
						$condition['LoginName'] = I('Reg_un');
						$loginid = M('Login')->where($condition)->getField(LoginId);
						$datas['LoginId'] = $loginid;
						switch ($LoginTag) {
							case 1:
								if (M('user')->add($datas)) {
									$model->commit();
									$this->success('register success', U('loginPage'));
								} else {
									$model->rollback();
									$this->error('网络错误请稍后再试。', U('User/register'));
								}
								break;
							case 2:
								if (M('company')->add($datas)) {
									$model->commit();
									$this->success('register success', U('loginPage'));
								} else {
									$model->rollback();
									$this->error('网络错误请稍后再试。', U('User/register'));
								}
								break;
						}
					}
				}
				else{
					echo "<script>alert('"."用户名已经存在"."');</script>";
					echo '<script>window.history.go(-1); </script>';
				}
			} else {
				echo "<script>alert('"."验证码错误"."');</script>";
				echo '<script>window.history.go(-1); </script>';
			}
		} else {
			$this->display();
		}
	}

	public function verify() {
		$config = array('imageH' => 25, // 验证码图片高度
		'imageW' => 100, // 验证码图片宽度
		'length' => 4, // 验证码位数
		'fontttf' => '5.ttf', // 验证码字体，不设置随机获取
		'fontSize' => 12, // 验证码字体大小(px)
		'useCurve' => false, // 是否画混淆曲线
		'useNoise' => false, 'useImgBg' => true);
		$verify = new \Think\Verify($config);
		$verify -> entry();

	}
	public function personal(){
		$sessid = session('userInfo.UId');
		$userInfo = M('user')-> where("loginid = '$sessid'")-> select();
		$userTX = M('user')-> where("loginid = '$sessid'")-> getfield('usertx');
		$use = M('login')-> where("loginid = '$sessid'")-> select();
		$userWorks = M('artical')-> join('t_user on t_user.userid = t_artical.userid')->where("t_user.loginid = '$sessid' AND t_artical.uploadtype = '1'")  -> select() ;
		$userWorksNum = M('artical')-> join('t_user on t_user.userid = t_artical.userid')->where("t_user.loginid = '$sessid' AND t_artical.uploadtype = '1'")  -> count() ;
		$userArticalNum = M('artical')-> join('t_user on t_user.userid = t_artical.userid')->where("t_user.loginid = '$sessid' AND t_artical.uploadtype = '2'")  -> count() ;
		$this -> assign('userInfo',$userInfo[0]);
		$this -> assign('userTX',$userTX);
		$this -> assign('use',$use);
		$this -> assign('userWorks',$userWorks);
		$this -> assign('userWorksNum',$userWorksNum);
		$this -> assign('userArticalNum',$userArticalNum);
		$this->display();
	}
	public function infoEdit(){
		$sessid = session('userInfo.UId');
		$userInfo = M('user')-> where("loginid = '$sessid'")-> select();
		$this -> assign('userInfo',$userInfo[0])-> display();
	}
	public function Editinfo(){
		if ($_POST) {

				if (I('zhiwei') == 'peo') {
					$position = 1;
				}
				else if (I('zhiwei') == 'stu') {
					$position = 2;
				}
				if (I('Sex') == 'male') {
					$UserSex = 1;
				}
				if (I('Sex') == 'female') {
					$UserSex = 2;
				}
				else if (I('Sex') == 'null') {
					$UserSex = 3;
				}

				$config = array(
					'rootPath' => './Public/',
					'savePath' => './upload/userTX/',
				);
				$ULImg = new\Think\Upload($config);
				$re = $ULImg -> uploadOne($_FILES['userTX']);
				if($re){
				$UPImgPath = $re['savepath'].$re['savename'];
				$_POST['userTX'] = $UPImgPath;
				}


				$data = array('LoginId' =>session('userInfo.UId'),'userTX'=> $_POST['userTX'],'UserName' => I('UserName'), 'UserSex' => $UserSex, 'Userphone' => I('userConnect'), 'UserEmail' => I('userEmail'),'position' => $position,'userIntro' => I('Resume') );
				$sessid = session('userInfo.UId');
				$checkUserInfo = M('user')-> where("loginid = '$sessid'")-> select();
				if(empty($checkUserInfo)){
					$userInfo = M('user') -> data($data) -> add();
					if($userInfo){
						$this -> success('save success1', U('Index/index'));
					}
					else{
					$this -> error('save error1', U('User/infoEdit'));
					}
				}
				else if(!empty($checkUserInfo)){
//					var_dump($sessid);exit;
					$userInfo = M('user') ->  where("loginid = '$sessid'")->save($data);
					if($userInfo){
						$this -> success('save success2', U('Index/index'));
					}
					else{
					$this -> error('save error2',U('User/infoEdit'));
				}
				}


			}
		else {
			$this -> display();
		}
	}
 public function ueditor(){
    	$data = new \Org\Util\Ueditor();
		echo $data->output();
    }
	function pubWorks(){
		$title = $_POST['worksname'];
		if($_POST['fenlei']){
			switch($_POST['fenlei']){
				case "UI" : $type = 1;break;
				case 'PM' : $type = 2;break;
				case 'MH' : $type = 3;break;
				case 'WY' : $type = 4;break;
				case 'MD' : $type = 5;break;
				case 'DP' : $type = 6;break;
				case 'PT' : $type = 7;break;
				default :  $type = 8;break;
			}
		}
		$content = htmlspecialchars(stripslashes($_POST['content']));
		$content = $_POST['content'];
		$sessid = session('userInfo.UId');
		$upLoadType = $_POST['upLoadType'];
		$arr['addtime'] = Date('Y-m-d H:i:s');

		$config = array(
			'rootPath' => './Public/',
			'savePath' => './upload/ArticalIndexImg/',
		);
		$ULImg = new\Think\Upload($config);
		$re = $ULImg -> uploadOne($_FILES['worksImg']);
		if($re){
			$UPImgPath = $re['savepath'].$re['savename'];
			$_POST['IndexImgPath'] = $UPImgPath;
		}
		if($title != '')
		{
			$checkUser = M('user')-> where("loginid = '$sessid'")-> find();
			$Userid = M('user')-> where("loginid = '$sessid'")-> getfield('userid');
			if(!empty($checkUser)){
				if(empty($_POST['IndexImgPath']))
				{
					$data = array('Title'=>$title,'type'=>$type,'UserId'=>$Userid,'Content'=>$content,'upLoadType'=>$upLoadType,'CreateTime'=>$arr['addtime']);
				}
				else{
					$data = array('Title'=>$title,'IndexImgPath'=>$UPImgPath,'type'=>$type,'UserId'=>$Userid,'Content'=>$content,'upLoadType'=>$upLoadType,'CreateTime'=>$arr['addtime']);
				}

				$push = M('artical');
				$res = $push->add($data);
				if($res)
				{
					$this -> success('psh success', U('Index/index'));
				}
				else{
					$this -> error('psh error1', U('User/pshWorksPag'));
				}
			}
			else{
					$this -> error('psh error2', U('User/pshWorksPag'));
			}
		}
	}
	function pubAritical(){
		$title = $_POST['Articalname'];
		if($_POST['fenlei']){
			switch($_POST['fenlei']){
				case "JC" : $ArticalType = 1;break;
				case 'GD' : $ArticalType = 2;break;
				case 'SJ' : $ArticalType = 3;break;
				default :  $ArticalType = 4;break;
			}
		}

		$content = $_POST['content'];
		$intro = $_POST['ArticalIntro'];
		$sessid = session('userInfo.UId');
		$upLoadType = $_POST['upLoadType'];
		$arr['addtime'] = Date('Y-m-d H:i:s');

		$config = array(
			'rootPath' => './Public/',
			'savePath' => './upload/ArticalIndexImg/',
		);
		$ULImg = new\Think\Upload($config);
		$re = $ULImg -> uploadOne($_FILES['ArticalImg']);
		if($re){
			$UPImgPath = $re['savepath'].$re['savename'];
			$_POST['IndexImgPath'] = $UPImgPath;
		}


		$content =  htmlspecialchars(stripslashes($_POST['content']));
		$sessid = session('userInfo.UId');
		$upLoadType = $_POST['upLoadType'];
		$arr['addtime'] = Date('Y-m-d H:i:s');
		if($title != '')
		{
			$checkUser = M('user')-> where("loginid = '$sessid'")-> find();
			$Userid = M('user')-> where("loginid = '$sessid'")-> getfield('userid');
			if(!empty($checkUser)){
				if(empty($_POST['IndexImgPath']))
				{
						$data = array('Title'=>$title,'intro'=>$intro,'ArticalType'=>$ArticalType,'UserId'=>$Userid,'Content'=>$content,'upLoadType'=>$upLoadType,'CreateTime'=>$arr['addtime']);
				}
				else{
						$data = array('Title'=>$title,'IndexImgPath'=>$UPImgPath,'intro'=>$intro,'ArticalType'=>$ArticalType,'UserId'=>$Userid,'Content'=>$content,'upLoadType'=>$upLoadType,'CreateTime'=>$arr['addtime']);
				}
				$push = M('artical');
				$res = $push->add($data);
//				var_dump($res);exit;
				if($res)
				{
					$this -> success('psh success', U('Index/index'));
				}
				else{
					$this -> error('psh error1', U('User/pshArtPag'));
				}
			}
			else{
					$this -> error('psh error2', U('User/pshArtPag'));
			}
		}
	}
//	function pubAritical(){
//		$title = $_POST['Articalname'];
//		if($_POST['fenlei']){
//			switch($_POST['fenlei']){
//				case "JC" : $ArticalType = 1;break;
//				case 'GD' : $ArticalType = 2;break;
//				case 'SJ' : $ArticalType = 3;break;
//				default :  $ArticalType = 4;break;
//			}
//		}
//		$content = $_POST['ArticalContent'];$sessid = session('userInfo.UId');
//		$config = array(
//			'rootPath' => './Public/',
//			'savePath' => './upload/',
//		);
//		$ULImg = new\Think\Upload($config);
//		$re = $ULImg -> uploadOne($_FILES['ArticalImg']);
//		if(!$re){
//			show_bug($ULImg -> getError());
//		}
//		else{
//			$UPImgPath = $re['savepath'].$re['savename'];
//			$_POST['ReferenceImg'] = $UPImgPath;
//		}
//		$upLoadType = $_POST['upLoadType'];
//		$arr['addtime'] = Date('Y-m-d H:i:s');
//		if($title != '')
//		{
//			$checkUser = M('user')-> where("loginid = '$sessid'")-> find();
//			$Userid = M('user')-> where("loginid = '$sessid'")-> getfield('userid');
//			if(!empty($checkUser)){
//
//				$data = array('Title'=>$title,'ArticalType'=>$ArticalType,'UserId'=>$Userid,'ReferenceImg'=>$UPImgPath,'Content'=>$content,'upLoadType'=>$upLoadType,'CreateTime'=>$arr['addtime']);
////				$data = array('userid'=>$sessid);
//				$push = M('artical');
//				$res = $push->add($data);
////				var_dump($res);exit;
//				if($res)
//				{
//					$this -> success('psh success', U('Index/index'));
//				}
//				else{
//					$this -> error('psh error1', U('User/pshArtPag'));
//				}
//			}
//			else{
//					$this -> error('psh error2', U('User/pshArtPag'));
//			}
//		}
//	}
	/* function _empty(){
	 echo "<img src='".IMG_URL.'404.gif'."' alt='' />";
	 } */

}
