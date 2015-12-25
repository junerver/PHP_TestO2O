<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/24
 * Time: 11:14
 */

namespace APP\Controller;

use Think\Controller;

class LoginController extends Controller
{
    //验证码方法
	Public function verify()
	{
		$config = array(
            'fontSize' => 30,    // 验证码字体大小
            'length' => 4,     // 验证码位数
            'useNoise' => false, // 关闭验证码杂点
//            'imageW'=>150,
//            'imageH'=>40
            );
		$Verify = new \Think\Verify($config);
		$Verify->entry();


	}

	public function login(){

		$this->assign('title', '登陆');
		$userModel = D('User');
		if (IS_POST) {

            $this->assign('old', I('post.'));  //保存上次请求
            $code = I('post.verifycode');   //从请求中获取验证码
            $error = array();
            $username = I('post.username');
            $password = md5(I('post.password'));
            $result = $userModel->where(array('username' => $username))->find();
            //链式判断，使用elseif
            if ($result == null || empty($result)) {
                //用户不存在
              $error['username'] = '用户名不存在！';
              $this->assign('errors', $error);
              $this->display();
            } elseif ($result['password'] != $password) {
                //密码不匹配
              $error['password'] = '密码错误！';
              $this->assign('errors', $error);
              $this->display();
            }elseif (!check_verify($code)) {
              $error['verify'] = '验证码错误！';
              $this->assign('errors', $error);
              $this->display();
            }else {
                //均匹配
              session('username', $username);
              $this->success('登陆成功！', U('Index/index'), 2);
            }
          } else {
            //无提交
           $this->display();
         }
       }

       public function signout()
       {
        //查看用户是否登陆
        //已登录则登出
        if(session('username')!=''){
         session(null);
         $this->success('退出成功', U('Index/index'), 2);
       }
     }

   }