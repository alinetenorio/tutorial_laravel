<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TestController extends Controller
{
    /* 
    * ==== CREATE
    */

    public function formAddUser(){
        return view('formAddUser');
    }

    public function addUser(Request $request){
        //dd($request);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->pass);
        $user->save();

        return redirect()->route('users.listAll');
    }

    /* 
    * ==== RECOVER
    */

    public function listAllUsers(){
        $users = User::all();

        //dd($users);


        return view('listAllUsers', [
            'users' => $users
        ]);
    }

    public function listUser(User $user){
        //dd($id);
        return view('listUser', [
            'user' => $user
        ]);
    }

   /* 
    * ==== UPDATE
    */
    public function formEditUser(User $user){
        return view('formEditUser', [
            'user' => $user
        ]);
    }

    public function editUser(User $user, Request $request){
        dd($request);
        
        /*
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->pass);
        $user->save();

        return redirect()->route('users.listAll');
        */
    }


    /* 
    * ==== DELETE
    */
}
