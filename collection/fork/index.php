<?php
/**
 * Author: 任小龙 Date:2019/9/12 Time:09:37
 */
$flag = true;
$masterPid = getmypid();
$pidList = [
    'child1' => 0,
    'child2' => 0,
    'child3' => 0,
];

while (true) {
    $pid = getmypid();
    foreach ($pidList as $key => $pidItem) {
        if ($pidItem == 0 ) {

        }
        if ($pid === $pidItem) {
            $key();
        }
    }

}

function child1()
{
    p('这是子进程1的程序');
    sleep(5);
}

function child2()
{
    p('这是子进程2的程序');
    sleep(5);
}

function child3()
{
    p('这是子进程3的程序');
    sleep(5);
}


//$xxoo = getmypid();
//p('正宗父ID: ' . $xxoo);
//
//for ($i = 0; $i < 3; $i++) {
//    pcntl_signal(SIGCHLD, function (){
//        pcntl_wait($status);
//    });
//    $pid = pcntl_fork();
//    if (-1 == $pid) {
//        exit('fork fail');
//    } elseif ($pid > 0) {
//        $mypid = getmypid();
//        p($i . '  子进程PID ' . $pid );
//        p(' 正宗的PID ' . $xxoo);
//        p($pid . ' 的父进程ID' . $mypid);
//        if ($xxoo != $mypid) {
//            p($mypid . ' 是个假的父ID');
//            posix_kill($pid, 9);
//        }
//        sleep(5);
//        pcntl_waitpid($pid, $status);
//    } else {
//        sleep(5);
//        p($i . '这里是子进程执行的代码 ' . $pid);
//    }
//}