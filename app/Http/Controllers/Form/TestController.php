<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function listAllUsers(){
        $users = User::all();

        dd($users);
    }
}
