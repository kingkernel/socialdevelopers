<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Mail\ConfirmNewUserMail;
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
        try {
            $user->save();
            Mail::to($user->email)->send(new ConfirmNewUserMail());
        } catch (\Throwable $th) {
            switch ($th->errorInfo) {
                case '1062':
                   return Route::get("/user/new");
                    break;
                /*
                default:
                    echo "alguma coisa";
                    break;
                */
            }
            $th->errorInfo;
            /*
            [0] => 23000
            [1] => 1062
            [2] => Duplicate entry 'daniel.santos.ap@gmail.com' for key 'usuarios_email_unique'
            */
        };

        //return ["fechou!"];
    }
}
