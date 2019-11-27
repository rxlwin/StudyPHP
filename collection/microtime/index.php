<?php
/**
 * Author: 任小龙 Date:2019-08-31 Time:15:11
 */
$start = microtime(true);
for ($m = 0; $m < 100000; $m++) {
    $c = ($m/1000);
}
p(microtime(true) - $start);