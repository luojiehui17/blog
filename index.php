<?php
// 启动session
session_start();

//定义前端入口常量
define('HO','index.php');

// 引入函数库
include('./functions.php');

// 接收访问参数
$target = !empty($_GET['a']) ? $_GET['a'] : 'index';

// 加载对应php文件
include("./control/home/$target.php");