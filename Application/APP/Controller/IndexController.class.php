<?php
namespace APP\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $this->assign('title', '首页');

        $this->display();

    }

    public function profile()
    {
        $this->assign('title', '个人信息');
        $user = session('username');  //从session中读取username
        $userModel = D('User');
        if ($user!=null&&!empty($user)) {
            //TODO
            $result = $userModel->where(array('username' => $username))->find();
            $this->assign('result',$result);
            $this->display();
        }else{
            $this->display();
        }    
    }

    public function register()
    {
        $this->assign('title', '注册');
        $userModel = D('User');
        if (IS_POST) {
            if ($userModel->create() && $userModel->add()) {
                $this->success($userModel->username . '注册成功');
            } else {
                $this->assign('errors', $userModel->getError());
                $this->assign('old', I('post.'));
                $this->display();

            }
        } else {
            $this->display();
        }
    }





}