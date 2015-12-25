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
        


<?php if(session('username')): ?><div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title"><?php echo session('username');?>的个人信息！</h3>
		</div>
		<div class="panel-body">
			Panel content
		</div>
	</div>
	<?php else: ?>
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>
			您还没有登陆！
		</strong>
	</div><?php endif; ?>
    </div>
</div>



 <script type="text/javascript" src="/PHP_TestO2O/Public/js/jquery.js"></script>
 <script type="text/javascript" src="/PHP_TestO2O/Public/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="/PHP_TestO2O/Public/js/jquery.md5.js"></script>
 <script type="text/javascript" src="/PHP_TestO2O/Public/js/js.js"></script>
</body>

</html>