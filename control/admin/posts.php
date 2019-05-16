<?php
// 1读取文件获取文章标题
$title = scandir('./data/art');
// 2、将特殊文件.和..剔除掉
unset($title[0]);
unset($title[1]);
view('posts');
