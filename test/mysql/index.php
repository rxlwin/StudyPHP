<?php
/**
 * Author: 任小龙 Date:2019-08-31 Time:15:18
 */
try{
    $dsn = "mysql:host=127.0.0.1;dbname=test";
    $pdo = new PDO($dsn,'root','123qweasd');
    $pdo->query("SET NAMES utf8");
//    $result = $pdo->query('select * from test');
    for ($j=0;$j<100;$j++) {
        $result = $pdo->exec(getSql());
        p($result);
    }
//    p(getSql());

//    $data = $result->fetchAll(PDO::FETCH_ASSOC);
//    p($data);
} catch (PDOException $e) {
    p($e->getMessage());
}

function getSql()
{
    $sql = 'insert into test (name) values ';
    for ($i=0; $i<10000; $i++) {
        $sql .= '("'.(microtime(true)-time()).'"),';
    }
    $sql = trim($sql, ',');

    return $sql;
}