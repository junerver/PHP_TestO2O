<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo ($title); ?></title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="/PHP_TestO2O/Public/css/bootstrap.css" />

</head>
<body>


<div class="container">
    <div class="col-md-2 listgroup">
        <!-- 对应两个操作方法 -->
        <a href="<?php echo U('Index/index');?>" class="list-group-item">主页</a>
        <?php if(session('username')): ?><a href="<?php echo U('Index/profile');?>" class="list-group-item">个人信息</a><?php endif; ?>
        <a href="<?php echo U('Index/register');?>" class="list-group-item">注册</a>
        <a href="<?php echo U('Login/login');?>" class="list-group-item">登陆</a>
        <!-- 当用户已经登陆后才显示退出按钮 -->
        <?php if(session('username')): ?><a href="<?php echo U('Login/signout');?>" class="list-group-item">退出</a><?php endif; ?>
        
    </div>

    <div class="col-md-10">
        
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>请先登录！</strong>
</div>

<div class="container">

    <form action="" method="post" role="form" class="form-horizontal">
        <legend>登陆：</legend>

        <div class="form-group">
            <label class="col-xs-3">用户名：</label>

            <div class="col-xs-6">
                <input type="text" class="form-control" name="username" id="username" value="<?php echo ($old["username"]); ?>">
            </div>
            <div class="col-xs-3">
                <?php if(isset($errors['username'])): ?><b id="error_user" style="color: red"><?php echo ($errors["username"]); ?></b><?php endif; ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-3">密码：</label>

            <div class="col-xs-6">
                <input type="password" class="form-control" name="password" id="password"
                       value="<?php echo ($old["password"]); ?>">
            </div>
            <div class="col-xs-3">
                <?php if(isset($errors['password'])): ?><b id="error_pass" style="color: red"><?php echo ($errors["password"]); ?></b><?php endif; ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-3">验证码：</label>

            <div class="col-xs-3">
                <input type="text" class="form-control" name="verifycode" id="verifycode" value="<?php echo ($old["verifycode"]); ?>">
            </div>
            <div class="col-xs-3">
                <img id="verifyImg" src="<?php echo U('Login/verify');?>"
                     onClick="this.src='<?php echo U('Login/verify');?>?rand='+Math.random()"
                     title="点击刷新验证码" width="155" height="40"/>
            </div>
            <div class="col-xs-3">
                <?php if(isset($errors['verify'])): ?><b id="error_verify" style="color: red"><?php echo ($errors["verify"]); ?></b><?php endif; ?>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>





    </div>
</div>



 <script type="text/javascript" src="/PHP_TestO2O/Public/js/jquery.js"></script>
 <script type="text/javascript" src="/PHP_TestO2O/Public/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="/PHP_TestO2O/Public/js/jquery.md5.js"></script>
 <script type="text/javascript" src="/PHP_TestO2O/Public/js/js.js"></script>
</body>

</html>