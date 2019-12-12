<?php
/**
 * Author: 任小龙 Date:2019/11/20 Time:10:04
 */

/*
 * 冒泡排序
 * 7+6+5+4+3+2+1
 */

function maopao($arr)
{
    $len = count($arr);//8
    $c = 0;
    for ($i = 1; $i < $len; $i++) {
//        p("i=".$i);
        for ($j = 0; $j < ($len - $i); $j++) {
//            p('j='.$j);
            if ($arr[$j + 1] < $arr[$j]) {
                $tmp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $tmp;
            }
            $c++;
        }
    }
    p($c);
    return $arr;
}

//通过m控制外层循环次数,这样减少了总的循环次数
function maopao2($arr)
{
    $max = count($arr);
    $c = 0; //循环次数
    while (true) {
        $m = 0;
        p("max=" . ($max-1));
        for ($i = 0; $i < ($max - 1); $i++) {
            if ($arr[$i + 1] < $arr[$i]) {
                $tmp = $arr[$i];
                $arr[$i] = $arr[$i + 1];
                $arr[$i + 1] = $tmp;
                $m = $i;
            }
            $c++;
        }
        if ($m > 0) {
            $max = $m + 1;
        } else {
            break;
        }
    }
    p($c);
    return $arr;
}


$arr = [2,1,5,4,3,6,7,8];
p(maopao($arr));
p('====');
p(maopao2($arr));