<?php
/**
 * Author: 任小龙 Date:2019/11/7 Time:14:19
 */

echo "1 " . time();
$res = fastcgi_finish_request();
p($res);
sleep(5);
file_put_contents('finish_request/1.log', $res . ' ' .time(), FILE_APPEND);
