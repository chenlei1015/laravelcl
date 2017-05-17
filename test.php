<?php

class test {
    public function testA($str, $callback)
    {
        $callback($str);
    }

    public function testB()
    {
        $func = function ($str) {
            echo $str;
        };
        $this->testA('chenlei' . "\n", function ($str) {
            echo $str;
        });
    }
}

$ins = new test();
$ins->testB();