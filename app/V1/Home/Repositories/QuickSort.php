<?php
/**
 * Created by PhpStorm.
 * User: Ray
 * Date: 17/4/24
 * Time: 下午5:13
 */

namespace App\V1\Home\Repositories;


use Illuminate\Support\Facades\Log;

class QuickSort
{
    public function sort($arr, $i, $j)
    {
        $left = $i;
        $right = $j;
        $count = $j - $i + 1;
        Log::info('0000000000000000000   arr=', $arr);
        Log::info('11111111111111111111   i=' . $i . '  j=' . $j);
        if ($count <= 1) {
            Log::info('count <= 1, so over');
            return $arr;
        }
        $index = $i;
        $demo = $arr[$index];//72

        while ($i < $j) {
            while($i < $j && $arr[$j] >= $demo){
                $j--;
            }
            if($i < $j){
                $arr[$index] = $arr[$j];
                $index = $j;
            }
            while ($i < $j && $arr[$i] <= $demo) {
                $i++;
            }
            if($i < $j){
                $arr[$index] = $arr[$i];
                $index = $i;
            }
        }
        $arr[$index] = $demo;

        $arr = $this->sort($arr, $left, $index - 1);
        $arr = $this->sort($arr, $index + 1, $right);
        return $arr;
    }
}