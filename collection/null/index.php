<?php
/**
 * Author: 任小龙 Date:2019-08-31 Time:15:17
 */
$a = null;
p(isset($a));
p(is_null($a));
$b = 1;
unset($b);
p(isset($b));
p(is_null($b));
$c = null;
$arr = get_defined_vars();
p($arr);
if(!isset($b) && !array_key_exists('b', $arr)){
    echo '变量未定义';
}else if($b === null){
    echo '变量已定义,但变量为空';
}else{
    echo '变量已定义且变量不为空';
}
exit;
$b = '';
if ($a === $b) {
    echo 'I Love PHPstack';
} else {
    echo 'sorry';
}
var_dump($a['key']);exit;

$b = [];
p(isset($b[1]));

$varList = get_defined_vars();
switch (true) {
    case !array_key_exists('var', $varList):
        echo '$var 未定义';
        break;
    case is_null($var):
        echo '$var 是 null 类型';
        break;
    case is_string($var):
        echo '$var 是 string 类型';
        break;
    case is_numeric($var):
        echo '$var 是 数字 类型';
        break;
    case is_array($var):
        echo '$var 是 数组 类型';
        break;
    case is_object($var):
        echo '$var 是 对象了类型';
        break;
    case is_bool($var):
        echo '$var 是 bool 类型';
        break;
    default:
        echo '$var 是 未知类型';
}