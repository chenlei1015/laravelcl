<?php

namespace App\V1\Home\Repositories;

/**
 * Created by PhpStorm.
 * User: Ray
 * Date: 17/4/24
 * Time: 下午4:19
 */
class NumToChinese
{
    public function index(){
        return [
            0 => $this->mainFunc(0),
            10 => $this->mainFunc(10),
            1000 => $this->mainFunc(1000),
            10000 => $this->mainFunc(10000),
            11000011 => $this->mainFunc(11000011),
            10000001 => $this->mainFunc(10000001),
            10000000 => $this->mainFunc(10000000),
            101010 => $this->mainFunc(101010),
            10011010 => $this->mainFunc(10011010),
        ];
    }

    public function mainFunc($number) {

        $wan = floor($number/10000);
        $ge = $number%10000;
        $str = '';

        $ge = $this->read($ge, $wan ? true : false);
        $wan = $this->read($wan, false);
        if ($wan) {
            $str = $str . $wan . '万';
        }
        if ($ge) {
            $str = $str . $ge;
        }
        if (!$wan && !$ge) {
            $str = '零';
        }

        return $str;
    }

    public function read($number, $haveMore){ //最大4位数字 0010, 1000, 0000, 1000, 0100
        if(!$number){
            return '';
        }

        $str = '';
        $qian = floor($number/1000);
        if($qian){
            $str = $str . $this->getChinese($qian) . '千';
        } elseif ($haveMore) {
            $str = $str . '零';
        }
        $number = $number%1000;
        $bai = floor($number/100);
        if($bai){
            $str = $str . $this->getChinese($bai) . '百';
        } elseif ($qian) {
            $str = $str . '零';
        }
        $number = $number%100;
        $shi = floor($number/10);
        if($shi){
            $str = $str . $this->getChinese($shi) . '十';
        } elseif ($bai) {
            $str = $str . '零';
        }
        $number = $number%10;
        $ge = $number;
        if ($ge) {
            $str = $str . $this->getChinese($ge);
        }

        //去除末尾的零
        $strArr = $this->mb_str_split($str);
        if ($strArr[count($strArr) - 1] == '零') {
            $str = mb_substr($str, 0, count($strArr) - 1);
        }
        return $str;
    }

    public function getChinese($numb)
    {
        $arr = ['零', '一', '二', '三', '四', '五', '六', '七', '八', '九'];

        return $arr[$numb];
    }

    function mb_str_split( $string ) {
        # Split at all position not after the start: ^
        # and not before the end: $
        return preg_split('/(?<!^)(?!$)/u', $string );
    }
}