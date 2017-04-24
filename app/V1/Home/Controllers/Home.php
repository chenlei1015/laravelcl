<?php

namespace App\V1\Home\Controllers;

use App\V1\Home\Repositories\NumToChinese;
use App\V1\Home\Repositories\QuickSort;

class Home
{
    private $numToChinese;
    private $quickSort;

    public function __construct(
        NumToChinese $numToChinese,
        QuickSort $quickSort
)
    {
        $this->numToChinese = $numToChinese;
        $this->quickSort = $quickSort;
    }
    //  localhost:8888/api/home
    //  输入数字, 输出数字对应的汉字读法
    public function index()
    {
        return $this->numToChinese->index();
    }

    //  localhost:8888/api/quick_sorts
    //快速排序算法
    public function quickSort()
    {
        $arr = [45,67,1,67,45,54,34,67,45,98,14,58,93,10,5,89];

        $arr = $this->quickSort->sort($arr, 0, count($arr) - 1);
        return $arr;
    }
}