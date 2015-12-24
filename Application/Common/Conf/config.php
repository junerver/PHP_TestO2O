<?php
return array(
    //'配置项'=>'配置值'
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'jike',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'jike_',    // 数据库表前缀

    'URL_MODEL'             => 2 ,  //URL模式 0 普通 1 pathinfo 2 rewrite 3 兼容
    'URL_HTML_SUFFIX'       => 'do', //伪静态后缀

//    'DEFAULT_V_LAYER'=>'Template',  //设置自定义的视图文件夹
//    'TMPL_TEMPLATE_SUFFIX'=>'.php', //设置模板的自定义后缀
//    'TMPL_FILE_DEPR'=>'_',           //设置模板文件的连接符不再以文件夹格式向下
//    'VIEW_PATH'=>'./Template/View/' //自定义视图文件夹位置
//    'SHOW_PAGE_TRACE'=>true,  //开启页面调试功能
//    'DEFAULT_THEME'=>'default',	//设置默认的主题为default
//    'TMPL_DETECT_THEME'=>true,	// 自动侦测模板主题
//    'THEME_LIST'=>'default,jike'	,	//设置模板的列表
    'TMPL_PARSE_STRING'=>array(
        '__IMG__'=>'./Public/img'
    )		,		//替换规则

    'READ_DATA_MAP'=>true,		//使用映射名作为字段名

    'SESSION_AUTO_START' => true, //是否开启session

);


