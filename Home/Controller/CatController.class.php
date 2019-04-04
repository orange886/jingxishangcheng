<?php
namespace Home\Controller;
use Think\Controller;
class CatController extends Controller {
    public function address(){
        $this->display();
    }
    public function flow1(){
        $this->display();
    }
    public function flow2(){
        $this->display();
    }
    public function flow3(){
        $this->display();
    }
    public function order(){
        $this->display();
    }
    public function user(){
        $this->display();
    }
    public function cat(){

        $cate_id = I('get.cate_id');
        $cat_goods = D('Admin/Goods')->where('cate_id'.$cate_id)->select();
        $this->assign('cat_goods',$cat_goods);
        $this->display();

    }
}