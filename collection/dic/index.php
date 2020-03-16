<?php
/**
 * Author: 任小龙 Date:2020/2/29 Time:11:19
 */
(new Dic())->main();
class Dic
{
    private $dicStr = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ';
    private $dicArr = [];
    private $dicKey = [];//['z'=>35...]
    private $len;

    public function __construct()
    {
        $this->init();
    }

    private function init()
    {
        $this->dicArr = str_split($this->dicStr);//[35=>'z'...]
        foreach ($this->dicArr as $k => $v) {
            $this->dicKey[$v] = $k;
        }
    }

    public function main()
    {

        $this->len = 8;
        $mm = [];
        $flag = true;
        while ($flag) {
            $mm = $this->incMM($mm);
            if ($this->len < count($mm)) {
                $flag = false;
            }
            $mmStr = implode('',$mm);
            file_put_contents('/tmp/dic.txt',$mmStr.PHP_EOL, FILE_APPEND);
            p(implode('',$mm));
        }
    }

    private function incMM($mm)
    {
        if (empty($mm)) {
            return $this->initMM();
        }
        /**
         * 目标
         * 00000000
         * 0000000Z
         * 00000010
         * 000000ZZ
         * 00000100
         */
        $len = count($mm);
        foreach ($mm as $k=>$v) {
            $next = $this->getNext($v);
            if ($next === false) {
                $mm[$k] = $this->dicArr[0];
                if ($k == ($len-1)) {
                    $mm[$len] = $this->dicArr[0];
                    break;
                }
                continue;
            } else {
                $mm[$k] = $next;
                break;
            }
        }
        return $mm;
    }

    private function initMM()
    {
        $len = $this->len;
        $res = [];
        for ($i = 0; $i<$len;$i++) {
            $res[$i] = $this->dicArr[0];
        }
        return $res;
    }

    private function getNext($v)
    {
        $key = $this->dicKey[$v];
        $nextKey = $key+1;
        if (array_key_exists($nextKey, $this->dicArr)) {
            return $this->dicArr[$nextKey];
        } else {
            return false;
        }
    }
}
