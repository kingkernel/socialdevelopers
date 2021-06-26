<?php

namespace app\Helpers;

class thisSystem 
{
    public function __construct()
    {
        //
    }
    public static function makePassword($pass)
    {
        $pre = sha1(md5($pass));
        return base64_encode($pre);
    }
}