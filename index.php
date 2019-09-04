<?php
require "vendor/autoload.php";


$m = getParamM();
$file = './test/' . trim($m, '/') . '/index.php';
if (is_file($file)) {
    t('start');
    include $file;
    t('over');
} else {
    p('没有找到目录文件 ' . $file);
}

function getParamM()
{
    $m = '';
    if (isset($_GET['m'])) {
        $m = $_GET['m'];
    } else {
        if (isset($_SERVER['argv'])) {
            $m = $_SERVER['argv'][1];
        }
    }
    return $m;
}
