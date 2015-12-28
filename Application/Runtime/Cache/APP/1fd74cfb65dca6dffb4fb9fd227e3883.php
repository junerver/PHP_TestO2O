<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo ($title); ?></title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="/PHP_TestTP/Public/css/bootstrap.css" />

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
		<strong>欢迎注册！</strong> 
	</div>
	<form action="/PHP_TestTP/Index/register.do" method="post" class="form-horizontal" role="form">
		<div class="form-group">
			<legend>注册新用户！</legend>
		</div>
		<div class="form-group">
			<label class="col-xs-2">用户名</label>
			<div class="col-xs-6">
				<input type="text" class="form-control" name="username" value="<?php echo ($old["username"]); ?>">
			</div>
			<div class="col-xs-4">
				<?php if(isset($errors['username'])): ?><b><?php echo ($errors["username"]); ?></b><?php endif; ?>
			</div>
		</div>
		<!-- 密码 -->
		<div class="form-group">
			<label class="col-xs-2">密码</label>
			<div class="col-xs-6">
				<input type="password" class="form-control" name="password"  value="<?php echo ($old["password"]); ?>">
			</div>
			<div class="col-xs-4">
				<?php if(isset($errors['password'])): ?><b><?php echo ($errors["password"]); ?></b><?php endif; ?>
			</div>
		</div>
		<!-- 确认密码 -->
		<div class="form-group">
			<label class="col-xs-2">确认密码</label>
			<div class="col-xs-6">
				<input type="password" class="form-control" name="confirm_password"  value="<?php echo ($old["confirm_password"]); ?>">
			</div>
			<div class="col-xs-4">
				<?php if(isset($errors['confirm_password'])): ?><b><?php echo ($errors["confirm_password"]); ?></b><?php endif; ?>
			</div>
		</div>

        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <button type="submit" class="btn btn-primary">注册</button>
            </div>
        </div>
	</form>
	




    </div>

</div>



 <script type="text/javascript" src="/PHP_TestTP/Public/js/jquery.js"></script>
 <script type="text/javascript" src="/PHP_TestTP/Public/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="/PHP_TestTP/Public/js/jquery.md5.js"></script>
 <script type="text/javascript" src="/PHP_TestTP/Public/js/js.js"></script>
</body>

</html>