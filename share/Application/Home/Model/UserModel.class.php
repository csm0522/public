<?php

namespace Home\Model;
use Think\Model;
class UserModel extends Model{

	function login($name,$pwd) {
		$res = $this ->db-> query("select * from t_login where LoginName='$name' and LoginPwd='$pwd'");
        return $res;
	}

    function checknamepwd($name,$pwd){
        $info=$this->getByuser_name($name);
        if ($info!=null){
            if ($info['login_pwd']===$pwd){
                return $info;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
    protected $_validate =
        array(
            array('login_un','require','用户名必须填写' ),
            array('login_pwd','require','密码必须填写' )
    );
    //添加话题标题
    function addTopic($data=array()){
        $datas=array("","");
        $condition['LoginId']=$data['id'];
        $userid=M('user')->where($condition)->getfield(UserId);
        $datas['UserId']=$userid;
        $datas['title']=$data['word'];
        $datas['CreatTime']=$data['time'];
        $datas['type']=$data['type'];
        $datas['ReportTag']=0;
        $Topic=M('topic');
        if($Topic->add($datas)){
            return 0;
        }
        else{
            return 1;
        }
    }

}



