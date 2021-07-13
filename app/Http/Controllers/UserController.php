<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{

    function login(Request $req)
    {
        $req->validate([
            'email'=>['required','string'],
            'password'=>['required']
        ]);

        $user=User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password, $user->password))
        {
            return "Username or password is not matched";
        }
        elseif($user->role_id== 1)
        {
            $req->session()->put('user',$user);
            return "mambo admin";
        }
        elseif($user->role_id == 2)
        {
            $req->session()->put('user',$user);
            return redirect('home');
        }
        elseif($user->role_id == 3)
        {
            $req->session()->put('user',$user);
            return "mambo staff";
        }
    }

    function register(Request $req)
    {
        $req->validate([
            'name'=>['required','string'],
            'email'=>['required','string'],
            'password'=>['required']
        ]);
        $user= new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->role_id=2;
        $user->password= Hash::make($req->password);
        $user->save();
        return redirect('login');
    }

    function category(Request $req)
    {
        $category = new category;
        $category->name=$req->name;
        $category->size=$req->size;
        $category->address=$req->address;
        $category->save();
        return redirect('home');
    }
}
