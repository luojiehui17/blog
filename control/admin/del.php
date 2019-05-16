<?php
// 1、接收数据
$title = $_GET['title'];
// echo $title;
// 2、根据标题删除文章
$del = unlink("./data/art/$title");
if($del)
    message('删除成功','posts');