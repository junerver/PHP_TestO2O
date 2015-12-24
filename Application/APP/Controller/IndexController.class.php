<?php
namespace APP\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
//        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
        $this->assign('title', '首页');
        $this->display();

    }

    public function profile()
    {
        $this->assign('title', '个人信息');
        $user = session('username');  //从session中读取username
        if ($user==null||empty($user)) {
            //TODO

        }
        $userModel = D('User');


        $this->display();

    }

    public function register()
    {
        $this->assign('title', '注册');
        $userModel = D('User');
        if (IS_POST) {
            if ($userModel->create() && $userModel->add()) {
                $this->success($userModel->username . '注册成功');
            } else {
                // $users = $userModel->select();

                // $this->assign('users', $users);
                $this->assign('errors', $userModel->getError());
                $this->assign('old', I('post.'));
                $this->display();
            }
        } else {
            // $users = $userModel->select();

            // $this->assign('users', $users);

            $this->display();
        }
    }





}