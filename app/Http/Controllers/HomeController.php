<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function home(){
        return view('home');
    }
    public function register(){
        return view('register');
    }
    public function save_user(){
        $name=request('name');
        $email=request('email');
        $phno=request('phno');
        User::create([
            'name'=>$name,
            'email'=>$email,
            'phno'=>$phno,
        ]);
        return redirect('index');
    }
}
