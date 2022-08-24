<?php

namespace App\Controllers;

class DefaultController extends \MainController
{
    public function index()
    {
        $todayMySql = json_encode(date('Y-m-d H:i:s'));
        $todayUnix = json_encode(microtime(date('H:i:s')));

        return view('default', ['todayUnix' => $todayUnix, 'todayMySql' => $todayMySql]);
    }
}

