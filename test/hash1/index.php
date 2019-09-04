<?php
/**
 * Author: 任小龙 Date:2019-08-31 Time:15:12
 */
function hash1($str)
{
    $hash = password_hash($str, PASSWORD_DEFAULT);
    p($hash);
    return str_replace('$2y$', '$2a$', $hash); // compatible with bcrypt of nodejs
}
p(hash1('123'));
p(1.2e3);