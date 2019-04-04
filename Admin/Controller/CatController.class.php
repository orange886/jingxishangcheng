<?php
namespace Admin\Controller;
use Admin\Model\CatModel;
use Think\Controller;

class CatController extends Controller{
    public $CatModel;
    public function __construct()
    {
        parent::__construct();
        $this->CatModel =D('Cat');
    }

    public function categoryAdd(){
        if (!IS_POST){
            $this->display();
        }else{
            $this->CatModel->cname = I('post.cname');
            $this->CatModel->parent_id = I('post.parent_id');
            $this->CatModel->isrec = I('post.isrec');
            $this->CatModel->cate_id = I('post.cate_id');
            //$catModel->add($_POST);//不安全
            if($this->CatModel->add()){
                $this->redirect('Admin/cat/categoryList');
            }else{
                echo "添加失败，请重新添加";
                $this->rediret('Admin/cat/categoryAdd');
            }
        }
    }
    public function categoryList(){
        $catInfo=$this->CatModel->getTree();
        //$catInfo = $this->CatModel->select();
        $this->assign('catInfo',$catInfo);
        $this->display();
    }

    public function categoryDel(){
        $cat_id = I('get.cat_id');
        if($this->CatModel->delete($cat_id)){
            $this->success('删除成功',U('Admin/cat/categoryList'),3);
        }else{
            $this->error('删除失败');
        }
    }

    public function categoryEdit(){
        $cat_id = I('get.cat_id');
        if(IS_POST){
            $this->CatModel->where('cat_id='.I('post.cat_id'))->save($_POST);
        }else{
            $cat_info = $this->CatModel->find($cat_id);
            $this->assign('cat_info',$cat_info);
            $this->display();
        }
    }
}