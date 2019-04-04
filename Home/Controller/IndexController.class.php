<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public $GoodsModel;
    public $CatModel;
    public function __construct()
    {
        parent::__construct();
        $this->GoodsModel =D('Admin/Goods');
        $this->CatModel = D('Admin/Cat');
    }

    public function index(){

        $tree =$this->CatModel->getTree();
        $this->assign('tree',$tree);//无限极分类存在一定问题，请到Admin Cat->List修改 在页面中有注释操作

        $is_hot = $this->GoodsModel->field('cate_id,goods_name,shop_price,goods_img')->where('is_hot=1')->order('goods_id desc')->limit('4')->select();
        $this->assign('is_hot',$is_hot);//热卖商品
        $is_rec = $this->GoodsModel->field('cate_id,goods_name,shop_price,goods_img')->where('is_rec=1')->order('goods_id desc')->limit('4')->select();
        $this->assign('is_rec',$is_rec);//推荐商品
        $is_new = $this->GoodsModel->field('cate_id,goods_name,shop_price,goods_img')->where('is_new=1')->order('goods_id desc')->limit('4')->select();
        $this->assign('is_new',$is_new);//新品上架


        $this->display();
    }
}