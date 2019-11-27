<?php
/**
 * Author: 任小龙 Date:2019/11/27 Time:09:02
 */

/**
 * 使用php进行一下桶排序
 */
$a = [2,8,-1,1,4,3,5];
$b = [];
$min = $a[0];
$max = $a[0];
foreach ($a as $v) {
    $b[$v]++;
    if ($v < $min) {
        $min = $v;
    }
    if ($v > $max) {
        $max = $v;
    }
}
for ($i = $min; $i<=$max; $i++) {
    if (array_key_exists($i, $b)) {
        p($i);
        //如果有重复的数,就需要在这里再做一次判断
    }
}
p($b);