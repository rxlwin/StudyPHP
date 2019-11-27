<?php
/**
 * Author: 任小龙 Date:2019/11/20 Time:19:06
 */
/*
 * 快速排序
 */

function quickSort($arr)
{
    $count = count($arr);
    if ($count == 1) {
        return $arr;
    }
    $mid = $arr[0];
    $leftArr = [];
    $rightArr = [];
    for ($i = 1; $i < $count; $i++) {
        if ($mid > $arr[$i]) {
            array_push($leftArr, $arr[$i]);
        } else {
            array_push($rightArr, $arr[$i]);
        }
    }
    $leftArr = quickSort($leftArr);
    $rightArr = quickSort($rightArr);

    return array_merge($leftArr, [$mid], $rightArr);
}
$arr = [2,4,5,3,1];
p(quickSort($arr));