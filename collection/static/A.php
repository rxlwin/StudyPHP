<?php
/**
 * Created by PhpStorm.
 * User: meicai renxiaolong
 * Date: 2019/2/14
 * Time: 17:59
 */

namespace a;


class A{
    public function test(){
        echo 'this is A test';
    }

    public static function export(){
        $className = get_called_class();
        (new $className)->test();
    }

    public static function __callStatic($name, $arguments)
    {
        $className = get_called_class();
        p($className);
        call_user_func_array([(new $className),$name],[$arguments]);
    }
}