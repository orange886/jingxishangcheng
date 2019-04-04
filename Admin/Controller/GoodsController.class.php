<?php
namespace Admin\Controller;
use Think\Controller;

class GoodsController extends Controller{
    public $GoodsModel;
    public function __construct()
    {
        parent::__construct();
        $this->GoodsModel =D('Goods');
    }

    public function goodsAdd(){
        if(IS_POST){
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize = 3145728 ;// 设置附件上传大小
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传
            $upload->rootPath = './Uploads/'; // 设置附件上传根
            // 上传文件
            $info = $upload->upload();
            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
            }else{// 上传成功
                $this->success('上传成功！');
            }
            $_POST['goods_img']='./Upload/'.$info['goods_img']['savepath'].$info['goods_img']['savename'];


            $addinfo = $this->GoodsModel->add($_POST);
         /* if(!$this->GoodsModel->create()){
              echo $this->GoodsModel->getError();
          }else{
              $addinfo = $this->GoodsModel->add();
          } //自动验证
         */
          if($addinfo) {
              $this->success('添加成功', 'goodsList', 3);
          }else{
              $this->error('添加失败');
          }
        }else {
            $this->display();
        }
    }

    public function goodsList(){
        if(!$_GET['p']){
            $_GET['p'] = 1;
        }
        $goodsList =$this->GoodsModel->page($_GET['p'].',7')->select();
        $count = $this->GoodsModel->count();
        $Page = new \Think\Page($count,7);// 实例化分页类 传入总记录数和每页显示的记录数
        $show = $Page->show();// 分页显示
        $this->assign('show',$show);

        $this->assign('goodsList',$goodsList);
        $this->display();

    }

    public function goodsDel(){

        if($this->GoodsModel->delete(I('get.cate_id'))){
            $this->redirect('Admin/goods/goodsList');
        }else{
            echo '删除失败，请重新删除';
        }
    }

    public function goodsEdit(){
        $cate_id = I('get.cate_id');
        if(IS_POST){
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize = 3145728 ;// 设置附件上传大小
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传
            $upload->rootPath = './Uploads/'; // 设置附件上传根
            // 上传文件
            $info = $upload->upload();
            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
            }else{// 上传成功
                $this->success('修改成功！');
            }
            $_POST['goods_img']='./Upload/'.$info['goods_img']['savepath'].$info['goods_img']['savename'];

            $this->GoodsModel->where('cate_id='.I('post.cate_id'))->save($_POST);
        }else{

            $goods_info = $this->GoodsModel->find($cate_id);
            $this->assign('goods_info',$goods_info);
            $this->display();
        }
    }

    public  function goodsExamine(){
        $cate_id = I('get.cate_id');
        if(IS_POST){
            $this->GoodsModel->where('cate_id='.I('post.cate_id'))->save($_POST);
        }else{
            $goods_info = $this->GoodsModel->find($cate_id);
            $this->assign('goods_info',$goods_info);
            $this->display();
        }
    }

}