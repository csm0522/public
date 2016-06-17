<?php
/**
 * Created by PhpStorm.
 * User: Chan
 * Date: 16/6/17
 * Time: 下午7:24
 */
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller{
    public function index(){
        if(session('userInfo.UId')){
            $data['name']="优酷";
            $this->assign("name",$data);
        }
        else{
            
        }
    }
}