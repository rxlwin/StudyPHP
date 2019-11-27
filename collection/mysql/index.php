<?php
/**
 * Author: 任小龙 Date:2019-08-31 Time:15:18
 */
try{
    $dsn = "mysql:host=mysql;port=3306;dbname=test";
    $pdo = new PDO($dsn,'root','123456');
    $pdo->query("SET NAMES utf8mb4");
    $result = $pdo->query('select * from test');
    $result = $pdo->query('desc test');
    p($result->fetchAll());
//    for ($j=0;$j<100;$j++) {
//        $result = $pdo->exec(getSql());
//        p($result);
//    }
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