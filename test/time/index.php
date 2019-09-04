<?php
/**
 * Author: 任小龙 Date:2019-08-31 Time:15:17
 */
date_default_timezone_set('PRC');
$a = date("Y-m-d H:i:s", '1553475600');
$b = date("Y-m-d H:i:s", '1553478360');

p($a);
p($b);

p(strtotime('2019-03-25 09:00:00'));