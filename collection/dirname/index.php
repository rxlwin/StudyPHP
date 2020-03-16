<?php
/**
 * Author: 任小龙 Date:2020/3/4 Time:20:00
 */

$a = 'a/b/c/d';
p(dirname($a));
$a = 'a\b\c\d';
p(dirname($a));

/*
string(5) "a/b/c"

string(1) "."
 */