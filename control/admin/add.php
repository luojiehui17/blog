<?php
// 1接收数据
$title = $_POST['title'];
$content = $_POST['content'];


if($title){
    // 2、根据标题创建文件
    $state = file_put_contents("./data/art/$title",$content);
    message('创建成功','posts');
}
else{
    message('创建失败!请检查提交内容与标题！','post-add');
}