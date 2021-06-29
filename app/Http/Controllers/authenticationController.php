<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class authenticationController extends Controller
{
    public function checklogin()
    {
        $dados = User::login($_POST["email"], $_POST["keypass"]);
        print_r($dados);
    }
}
