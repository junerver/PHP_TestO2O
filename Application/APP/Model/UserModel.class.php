<?php
/**
 * Created by PhpStorm.
 * User: junerver
 * Date: 2015/12/21
 * Time: 22:43
 */

namespace APP\Model;
use Think\Model;

class UserModel extends Model
{
    //验证
    protected $patchValidate = true;
    protected $_validate = array(
        array(
            'username', //验证字段
            'require',  //验证方法，必要的
            '用户名必须填写',  //错误提示
            self::EXISTS_VALIDATE,  //验证条件
            'regex',    //附加规则
            self::MODEL_INSERT  //验证时间，插入/更新/both
        ),

        array(
            'username',
            '',
            '用户名被别人占用了',
            self::EXISTS_VALIDATE,
            'unique',   //是否唯一
            self::MODEL_INSERT
        ) ,
        array(
            'password',
            'require',
            '密码必须填写'
        ) ,
        array(
            'confirm_password',
            'password',
            '确认密码不一致',
            self::MUST_VALIDATE,
            'confirm',
            self::MODEL_INSERT
        )

    );
    //自动填充字段
    protected $_auto = array(
        array(
            'password',
            'md5',
            self::MODEL_BOTH,
            'function'
        ) ,
        array(
            'create_time',
            'time',
            self::MODEL_INSERT,
            'function'
        ) ,
        array(
            'status',
            1
        )
    );
}