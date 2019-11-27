<?php
/**
 * Author: 任小龙 Date:2019/11/20 Time:09:43
 */

/*
 有一母牛，到 4 岁可生育，每年一头，所生均是一样的母牛，到 15 岁绝育，不再能生，20 岁死亡，问 n 年后有多少头牛。
 */

function cow($n)
{
    $cows = [0];
    for ($i = 1; $i <= $n; $i++) {
        foreach ($cows as $k => $v) {
            $cows[$k]++;
            if ($cows[$k] >= 4 && $cows[$k] < 15) {
                array_push($cows, 0);
            }
            if ($cows[$k] == 20) {
                unset($cows[$k]);
            }
        }
    }
    return count($cows);
}

p(cow(25));



// 别人的答案
function niu($y)
{
    static $num = 1;                    //定义静态变量;初始化牛的数量为1
    for ($i = 1; $i <= $y; $i++) {
        if ($i >= 4 && $i < 15) {          //每年递增来算，4岁开始+1，15岁不能生育
            $num++;
            niu($y - $i);                //递归方法计算小牛$num，小牛生长年数为$y-$i
        } else if ($i == 20) {
            $num--;                             //20岁死亡减一
        }
    }
    return $num;
}

p('========');
p(niu(25));