<?php

namespace App\Demo;

use App\Http\Requests\Request;
use RequestsApi;
use App\Http\Controllers\Controller;
use Redis;

class ChenLei extends Controller
{
    /**
     *                admin
     * @return array
     */
    public function getApi()
    {
        $file = file(__DIR__ . '/../../../beeper_admin_web/789.txt');
        foreach ($file as &$item) {
            $item = str_replace("\n", '', $item);
        }
        return $file;
    }

    /**
     *                customer
     * @return mixed
     */
    public function getApiv2()
    {
        $file = file(__DIR__ . '/../../../beeper_customer_web/789.txt');
        foreach ($file as &$item) {
            $item = str_replace("\n", '', $item);
        }
        return $file;
    }

    public function test(\Illuminate\Http\Request $request)
    {
        $request->session()->put('mykey', [1,2,3]);
        return $request->session()->all();
        //洗牌算法
        //我们可以从前向后遍历，对元素 i，前 i-1 个位置构成新牌堆，
        //i 及其后续元素属于旧牌堆。从旧牌堆中随机抽一个元素，
        //与 i 处元素交换，即完成了一次抽牌动作
        $arrays = [4,3,5,7,8,2,3,1,4,2];
        $size = count($arrays);
        $i = 0;
        for (;$i < $size; $i ++) {

            $random = round(rand($i + 1, $size - 1));

            $demo = $arrays[$random];
            $arrays[$random] = $arrays[$i];
            $arrays[$i] = $demo;
        }
        return $arrays;
    }

    public function test2()
    {
        foreach ($this->generatorTest(1, 1000000, 1) as $item) {
        }
        var_dump('2 = ' . memory_get_usage());
        range(1, 1000000, 1);
        var_dump('3 = ' . memory_get_usage());
    }

    /**
     *  生成器方法
     *
     * @param $start
     * @param $end
     * @param int $step
     * @return \Generator
     */
    private function generatorTest($start, $end, $step = 1)
    {
        while($start <= $end) {
            yield $start;

            $start += $step;
        }
    }

    public function testSetRedis()
    {
        return [Redis::setex(1, 10, '123123123')];
    }

    public function testGetRedis()
    {
        return [Redis::get(1), Redis::keys('*')];
    }
}