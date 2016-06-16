<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page;
class BusinessController extends Controller {
	public function BusinessList() {
			$user = D('login');
			$page = D('login')->join('RIGHT JOIN t_company ON t_login.Loginid = t_company.Loginid') -> where('t_login.LoginTag = 1') -> count();
			$ppp = new Page($page, 3);
			$list = $user -> join('RIGHT JOIN t_company ON t_login.Loginid = t_company.Loginid') ->where('t_login.LoginTag = 1 and t_company.tag = 1')->limit($ppp->firstRow.','.$ppp->listRows)-> select();
			$show = $ppp -> show();
//			show_bug($list);
			$this -> assign('list', $list);
			$this -> assign('page', $show);//分页导航
			$this -> display();
	}

	public function userDel(){
        $login=D('login');
        $user=D('user');
		$id=$_GET['id'];
//		echo "<script>alert('$id');</script>";
        if($user->join('RIGHT JOIN t_user ON t_login.Loginid = t_user.Loginid')->where("t_user.Loginid = $id")->delete()){
        	if($login->join('RIGHT JOIN t_user ON t_login.Loginid = t_user.Loginid')->where("t_login.Loginid = $id")->delete()){
        		$this->success('!!!');
        }
        }
		else{
			$this->error('???');
		}
    }

}
