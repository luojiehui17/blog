<?php
// 后台提示信息
function message($msg,$url){
    $path = IN.'?a='.$url;
    echo <<<JS
<script>
alert('{$msg}')
location.href='{$path}';
</script>
JS;
exit;
}
// 前端提示信息
function msg($msg,$url){
    $path = HO.'?a='.$url;
    echo <<<JS
<script>
alert('{$msg}')
location.href='{$path}';
</script>
JS;
exit;
}
//检查登录状态
function checkState(){
    if(empty($_SESSION['name'])){
        message("请先登录！","login");
        exit;
    }
}

// 加载后台静态页面
function view($name){
    include('view/admin/'.$name.'.html');
}
// 加载前端静态页面
function template($name){
    include('view/home/'.$name.'.html');
}