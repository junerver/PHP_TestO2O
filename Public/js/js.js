function login() {
    var username = $('#username').val();
    var word = $('#password').val();
    if (username=='') {
         $('#error_user').html('用户名不能为空！');
        return false;
    }else if (word=='') {
        $('#error_pass').html('密码不能为空！');
        return false;
    }else
    var password = $.md5(word);
    var get = 'http://localhost:9090/PHP_TestO2O/Login/login'+"/username/" + username + "/password/" + password;
    $.get(get);

}

function changeVerify(){
    var timenow = new Date().getTime();
    document.getElementById('verifyImg').src='http://localhost:9090/PHP_TestO2O/Index/verify';
}