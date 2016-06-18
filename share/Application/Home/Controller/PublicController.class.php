<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {
    public function index(){
    	$this->display();
    }
    public function SearchArt(){
        $str=$_GET['seaid'];
//        echo "<script>alert('".$str."');</script>";
        $con['Title']=array('LIKE',"%$str%");
        $data=M('artical')->where($con)->field('ariticalid,userid,title,indeximgpath,upLoadType,intro,CreateTime')->order("ariticalid DESC")->select();
        for ($i = 0; $i < count($data); $i++) {
            $con2['UserId']=$data[$i]['userid'];
            $data[$i]['username']=M('user')->where($con2)->getField(UserName);
            if(empty($data[$i]['username'])){
                $data[$i]['username']="游客";
            }
//            $data[$i]['articaltype'] = $this->getType($data[$i]['articaltype']);
            switch ($data[$i]['uploadtype']){
                case 1:$data[$i]['uploadtype']="文章";break;
                case 2:$data[$i]['uploadtype']="作品";break;
            }
        }
//        dump($data);
//        dump($data);
        $this->assign("showRes",$data);
        $this->display();
    }
    public function showArt(){
        $str=$_GET['seaid'];
        $type=$_GET['type'];
        echo $str;
        echo $type;
    }
}