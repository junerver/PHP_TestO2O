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
    <strong>
        <?php if(session('username')): echo session('username');?> 欢迎您！
            <?php else: ?>
            这是首页您还没有登陆！<?php endif; ?>
    </strong>
</div>

<link href="/PHP_TestTP/Public/ueditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/PHP_TestTP/Public/ueditor/third-party/jquery.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/PHP_TestTP/Public/ueditor/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/PHP_TestTP/Public/ueditor/umeditor.min.js"></script>
<script type="text/javascript" src="/PHP_TestTP/Public/ueditor/lang/zh-cn/zh-cn.js"></script>


<!--style给定宽度可以影响编辑器的最终宽度-->
<script type="text/plain" id="myEditor" style="width:1000px;height:240px;">
    <p>请在此输入~</p>
</script>

<script type="text/javascript">
    //实例化编辑器
    $(document).ready(function (){
        var um = UM.getEditor('myEditor');
    });
</script>


    </div>

</div>



 <script type="text/javascript" src="/PHP_TestTP/Public/js/jquery.js"></script>
 <script type="text/javascript" src="/PHP_TestTP/Public/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="/PHP_TestTP/Public/js/jquery.md5.js"></script>
 <script type="text/javascript" src="/PHP_TestTP/Public/js/js.js"></script>
</body>

</html>