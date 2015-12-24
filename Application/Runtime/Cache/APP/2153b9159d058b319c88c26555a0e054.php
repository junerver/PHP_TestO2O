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
        <a href="<?php echo U('Index/profile');?>" class="list-group-item">个人信息</a>
        <a href="<?php echo U('Index/register');?>" class="list-group-item">注册</a>
        <a href="<?php echo U('Login/login');?>" class="list-group-item">登陆</a>
    </div>

    <div class="col-md-10">
        
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>
        <?php if(session('username')): echo session('username');?>的个人信息！
            <?php else: ?>
            您还没有登陆！<?php endif; ?>
    </strong>
</div>
    </div>
</div>



 <script type="text/javascript" src="/PHP_TestO2O/Public/js/jquery.js"></script>
 <script type="text/javascript" src="/PHP_TestO2O/Public/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="/PHP_TestO2O/Public/js/jquery.md5.js"></script>
 <script type="text/javascript" src="/PHP_TestO2O/Public/js/js.js"></script>
</body>

</html>