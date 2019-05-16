<?php
// 1、读取所有文章文件名
$data = scandir("./data/art");
// 2、将特殊文件.和..去掉
unset($data[0]);
unset($data[1]);

// 3、遍历读取每个文件名的内容
foreach($data as &$v){
    // 打开文件，只读
    $art = fopen("./data/art/$v",'r');
    // 读取文章的前一百个字节
    $content = fread($art,1024);
    // 将data变成二维数组，注意这里是引用传递
    $v = [
        "title" => $v,
        "content" => $content,
    ];
    // 关闭
    fclose($art);
}

// 显示首页
template('index');