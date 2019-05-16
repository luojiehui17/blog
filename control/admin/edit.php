<?php
// 1、接收数据
$title = $_GET['title'];
// 2、根据标题读取内容
$content = file_get_contents("./data/art/$title");
// echo $content;


view('post-edit');