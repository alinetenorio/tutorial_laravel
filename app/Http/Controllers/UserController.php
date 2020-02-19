<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listUser(){
        /*$user = new User();
        $user->name = 'hachi';
        $user->email = "hachi-email";
        $user->password = Hash::make('123');
        $user->save();*/

        $user = User::where('id', 3)->first();
        //dd($user);

        return view('listUser', [
            'user' => $user
        ]);
        
    }
}
