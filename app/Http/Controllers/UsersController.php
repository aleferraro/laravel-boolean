<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MyUser;

class UsersController extends Controller
{
    public function index(){

        $users = MyUser::all();

        return view('users', compact('users'));
    }

    public function show($id){

        $user = MyUser::find($id);

        return view('user', compact('user'));
    }
}
