<?php
/**
 * Author: 任小龙 Date:2019-08-31 Time:15:17
 */
$a = null;
p(isset($a));exit;
$b = '';
if ($a === $b) {
    echo 'I Love PHPstack';
} else {
    echo 'sorry';
}
var_dump($a['key']);exit;

$b = [];
p(isset($b[1]));