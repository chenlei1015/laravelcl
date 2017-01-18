<?php

namespace App\V1\Home\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{

    public function index(Request $request) {
        $user = $request->user();
        echo $user;
    }
}