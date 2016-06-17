<?php
namespace Home\Controller;
use Think\Controller;
class KsqController extends Controller
{
    public function index()
    {
        $ksq=M('topic');
        $data=$ksq->field('topicId,content,type,CreatTime')->order("topicId DESC")->select();
        for($i=0;$i<count($data);$i++){
            $data[$i]['type']=$this->getType($data[$i]['type']);
        }
//        $data['type']=$this->getType($data['type']);
        $this->assign('topis',$data);
        $this->display();
    }

    public function addTopic()
    {
        $sessid = session('userInfo.UId');
        if ($sessid == "") {
            echo '<script>alert("请先登录");window.history.go(-1); </script>';
        } else {
            if (empty($_POST)) {
                echo '<script>alert("请填写吐槽内容哟~");window.history.go(-1); </script>';
            } else {
                $data['word'] = $_POST['sword'];
                $data['id'] = $sessid;
                $data['time'] = Date('Y-m-d H:i:s');
                $data['type'] = $_POST['types'];
                $rs = D('User')->addTopic($data);
                $URL=U("ksq/index");
//                echo $URL;
                if ($rs == 0) {
                    echo '<script>alert("发布成功");</script>';
//                    echo "asd";
                    echo "<script>location.href='".$URL."';</script>";
//                    echo '<script>location.href("{U(\'Ksq/index\')});</script>';
                } else {
                    echo '<script>alert("发布失败,请稍后重试");window.history.go(-1); </script>';
                }
            }  
        }
    }
    public function showtype(){

    }
    function getType($typeid){
        switch ($typeid){
            case "0":$type="学校生活";break;
            case "1":$type="八卦新闻";break;
            case "2":$type="闲谈闲聊";break;
            case "3":$type="失物招领";break;
            case "4":$type="比赛宣传";break;
            case "5":$type="寻求伙伴";break;
            case "6":$type="寻找兼职";break;
            default:$type="其他";break;
        }
        return $type;
    }
}