<?php
namespace Home\Controller;
use Think\Controller;
class KsqController extends Controller {
    public function index(){
    	$this->display();
    }
    public function addTopic(){
        $sessid = session('userInfo.UId');
        if($sessid==""){
            echo '<script>alert("请先登录");window.history.go(-1); </script>';
        }
        else{
//            echo $sessid;
            if(empty($_POST)){
                echo  '<script>alert("请填写吐槽内容哟~");window.history.go(-1); </script>';
            }
            else{
                $data['word']=$_POST['sword'];
                $data['id']=$sessid;
                $data['time']=Date('Y-m-d H:i:s');
                $data['type']=$_POST['types'];
                $rs = D('User')->addTopic($data);
                if($rs==0){
                    echo  '<script>alert("发布成功");window.history.go(-1); </script>';
                }
                else{
                    echo  '<script>alert("发布失败,请稍后重试");window.history.go(-1); </script>';
                }
            }
        }

    }
}