<?php
namespace Admin\Model;
use Think\Model;

class CatModel extends Model{
    public  $cat;
    public function __construct(){
        parent::__construct();
       $this->cat = $this->select();
    }

    public function getTree($id=0,$lev=0){
        $tree = [];
        foreach ($this->cat as $k=>$v){
            if($v['parent_id']==$id){
                $v['lev']=$lev;
                $tree[] = $v;
                $tree = array_merge($tree,$this->getTree($v['cat_id'],$lev+1));
            }
        }
        return $tree;
    }
}