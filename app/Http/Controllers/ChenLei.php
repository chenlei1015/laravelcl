<?php

namespace App\Http\Controllers;

use RequestsApi;

class ChenLei extends Controller
{
    /**
     *                admin
     * @return array
     */
    public function getApi()
    {
        $file = file(__DIR__.'/../../../../beeper_admin_web/123.txt');
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
        $file = file(__DIR__.'/../../../../beeper_customer_web/789.txt');
        foreach ($file as &$item) {
            $item = str_replace("\n", '', $item);
        }
        return $file;
    }

}