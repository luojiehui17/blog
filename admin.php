<?php
// 入口文件
// 开启session
session_start();
// 引入函数库
include("functions.php");
// 设置一个常量用于
define('IN','admin.php');

//接收请求
$session = !empty($_GET['a'])? $_GET['a'] :'index';

// 白名单，跳转登录页跟验证登录时不需要检测登录状态
$white = ['login','dologin'];
if (!in_array($session,$white)) {
    // 判断登录状态
    checkState();
}


// 加载php文件
include('./control/admin/'.$session.'.php');