<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Helpers\thisSystem;

class inputController extends Controller
{
    public static function newuserinput()
    {
        $user = new User;
        $user->email = $_POST["email"];
        $user->nome = $_POST["name"];
        $user->sobrenome = $_POST["fullname"];
        $user->keypass = thisSystem::makePassword($_REQUEST["passkey"]);
        $user->nasc = $_POST["ano_c"].'-'.$_POST["mes_c"].'-'.$_POST["dia_c"];
        $user->save();
        //return ["fechou!"];
    }
}
