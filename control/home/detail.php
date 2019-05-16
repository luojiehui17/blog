<?php
// 1、接收参数
$title = $_GET['title'];
// 2、根据标题读取文件内容;
$content = file_get_contents("./data/art/$title");


template('detail');
// 显示列表页