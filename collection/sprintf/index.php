<?php
/**
 * Author: 任小龙 Date:2020/3/16 Time:18:31
 */

$t = 'abcd';
p(sprintf("%-14s %s",$t.':', '111'));
p(sprintf("%-14s %s",$t.'aa:', '111'));
p(sprintf("%-14s %s",$t.':', '111'));

/*
string(18) "abcd:          111"
string(18) "abcdaa:        111"
string(18) "abcd:          111"

 * 14的意思是为了格式化长度
 */

//使用场景
$headers = [
    'cache-control' => 'no-cache, private',
    'date' => 'Mon, 16 Mar 2020 10:35:09 GMT',
    'content-type' => 'application/json'
];
$max = max(array_map('strlen', array_keys($headers))) + 1;
$content = '';
foreach ($headers as $name => $value) {
    $name = ucwords($name, '-');
        $content .= sprintf("%-{$max}s %s\r\n", $name.':', $value);
}

echo $content;

/*
Cache-Control: no-cache, private
Date:          Mon, 16 Mar 2020 10:35:09 GMT
Content-Type:  application/json
 */