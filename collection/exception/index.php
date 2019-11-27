<?php
/**
 * Author: 任小龙 Date:2019-08-31 Time:15:14
 */
try {

    throw  new Exception('abc');
} catch (\Exception $e) {
    echo $e->getMessage();
}


function error()
{
    echo 'this is error' . PHP_EOL;
    exception();
    exit;
}

function exception()
{
    echo 'this is exception';
}

ini_set('display_errors', true);
error_reporting(E_ALL);
set_exception_handler('exception');
set_error_handler('error');
throw new Exception('this is exception');
$foo = [bar];
echo $foo;