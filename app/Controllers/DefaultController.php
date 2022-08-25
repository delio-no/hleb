<?php

namespace App\Controllers;

class DefaultController extends \MainController
{
    public function index()
    {
        $mySqlTime = date('Y-m-d H:i:s');
        $timeUnix = microtime(date('H:i:s'));
        $data = ['method' =>  __FUNCTION__, "params" => [$mySqlTime, $timeUnix]];
        $response = json_encode($data);
        return view('default', ['response' => $response]);
    }
}

