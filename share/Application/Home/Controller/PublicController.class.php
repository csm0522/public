<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {
    public function index(){
    	$this->display();
    }
    public function SearchArt(){
        $str=$_POST['search'];
        echo "<script>location.href='".$str."';</script>";
        $con['Title']=array('LIKE',"%$str%");
        $data=M('artical')->where($con)->select();
        dump($data);
        $this->display();
    }
}