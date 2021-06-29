<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class authenticationController extends Controller
{
    public function checklogin()
    {
        $login = User::login($_POST["email"], $_POST["keypass"]);
        if ($login["existe"]==1){
            echo "pode logar";
        } else {
            echo "não pode logar";
        };
    }
}
