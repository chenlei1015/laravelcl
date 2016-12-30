<?php

namespace App\Http\Controllers;

use RequestsApi;

class ChenLei extends Controller
{
    public function getApi()
    {
        $file = file(__DIR__.'/../../../789.txt');
        foreach ($file as &$item) {
            $item = str_replace("\n", '', $item);
        }
        return $file;
        return config('chenleiApi');
    }

    public function getApiv2()
    {
        return config('chenleiApiV2');
    }

}