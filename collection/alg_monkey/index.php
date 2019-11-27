<?php
/**
 * 算法大全
 * Author: 任小龙 Date:2019/11/19 Time:18:49
 */

/*
 一群猴子排成一圈，按 1，2，…，n 依次编号。然后从第 1 只开始数，数到第 m 只,把它踢出圈，从它后面再开始数，再数到第 m 只，在把它踢出去…，如此不停的进行下去，直到最后只剩下一只猴子为止，那只猴子就叫做大王。要求编程模拟此过程，输入 m、n, 输出最后那个大王的编号
 */
function king($m, $n) {
    $monkeys = range(1, $n);
    $i = 1;
    while (count($monkeys) > 1) {
        foreach ($monkeys as $key => $value) {
            if ($i == $m) {
                unset($monkeys[$key]);
                $i = 1;
            } else {
                $i++;
            }
        }
    }
    return current($monkeys);
}

function king2($m, $n) {
    $monkeys = range(1, $n);         //创建1到n数组
    $i=0;
    while (count($monkeys)>1) {	 //循环条件为猴子数量大于1
        if(($i+1)%$m==0) {	 //$i为数组下标;$i+1为猴子标号
            unset($monkeys[$i]);	//余数等于0表示正好第m个，删除，用unset删除保持下标关系
        } else {
            array_push($monkeys,$monkeys[$i]);     //如果余数不等于0，则把数组下标为$i的放最后，形成一个圆形结构
            unset($monkeys[$i]);
        }
        $i++;//$i 循环+1，不断把猴子删除，或 push到数组
    }
    return current($monkeys);	//猴子数量等于1时输出猴子标号，得出猴王
}
p('king');
p(king(10, 9));
p('king2');
p(king2(10, 9));
