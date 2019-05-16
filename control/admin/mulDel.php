<?php
// 接收复选框提交的信息
$data = $_POST['title'];
// 循环遍历数组，根据标题删除文件
foreach($data as $v){
    unlink("./data/art/$v");
}
message('删除成功','posts');
