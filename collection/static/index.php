<?php
/**
 * Author: 任小龙 Date:2019-08-31 Time:15:11
 */
include 'A.php';
include 'B.php';

class a {
    public function b()
    {
        echo 'this is B method';
    }

    public static function __callStatic($name, $arguments)
    {
        echo 'this is __callStatic';
    }
}

try{
    a::b();
} catch (Exception $e) {
    echo 'this is Exception';
//    echo $e->getMessage();
    exit;
}