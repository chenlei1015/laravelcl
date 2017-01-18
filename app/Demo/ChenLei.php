<?php

namespace App\Demo;

use RequestsApi;
use App\Http\Controllers\Controller;

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

}