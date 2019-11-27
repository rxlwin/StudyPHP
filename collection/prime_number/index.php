<?php
/**
 * Author: 任小龙 Date:2019-08-31 Time:15:09
 */
//求100至150之间的质数
for ($i = 1; $i <= 100; $i++) {
    $flag = true;
    for ($j = 2; $j <= $i / 2; $j++) {
        if ($i % $j == 0) {
            $flag = false;
            break;
        }
    }
    if ($flag == true) {
        echo $i . ' ';
    }
}