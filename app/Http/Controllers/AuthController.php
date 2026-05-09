<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use app\Trait\HttpResponses;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    use HttpResponses;

    public function login()
    {
        return "Ola mundo!";
    }
}
