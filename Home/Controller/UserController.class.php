<?php
namespace Home\Controller;
use Think\Controller;

class UserController extends Controller{
    public function login(){
        if(IS_POST) {
            $verify = new \Think\Verify();
            if($verify->check($_POST['yzm'])){
                echo '登陆成功';//验证验证码
            }else{
                echo '登陆失败，验证码错误';
            }
        }
        $this->display();
    }
    public function regist(){
        $this->display();
    }
    public function yzm(){
        $Verify = new \Think\Verify();
        $Verify->fontSize = 50;
        $Verify->length = 4;
        $Verify->entry();//验证码功能
    }
}