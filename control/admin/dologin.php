<?php
// 接收表单数据
$username = $_POST['username'];
$password = $_POST['password'];
// echo md5($password);
// echo $username;
// echo $password;

//读取记录用户账号的本地文件（模拟数据库）
$acount = file_get_contents('./data/acount');
// 以回车分割$acount
$acount = explode("\n",$acount);
//将用户提交的账号密码进行拼接
$user = $username.' '.md5($password);
// 循环数组判断密码账号是否相等
foreach($acount as &$v){
    // 去掉两边空格
    $v= trim($v);
    if($v == $user){
        // 设置SESSION
        $_SESSION['name'] = $username;
        message('登录成功','index');
    }else{
        message('账号或密码错误','login');
    }
}