<?php
// 接收表单数据
$old = $_POST['old'];
$title = $_POST['title'];
$content = $_POST['content'];

// 根据旧标题改写文章内容
file_put_contents("./data/art/$old",$content);
$state = rename("./data/art/$old","./data/art/$title");
if($state)
    message('修改成功','posts');