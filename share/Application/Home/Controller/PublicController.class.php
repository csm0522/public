<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {
    public function index(){
    	$this->display();
    }
    public function SearchArt(){
        $str=$_POST['search1'];
        echo "<script>alert('".$str."');</script>";
        $con['Title']=array('LIKE',"%$str%");
        $data=M('artical')->where($con)->select();
        dump($data);
        $this->assign("showRes",$data);
    }
}