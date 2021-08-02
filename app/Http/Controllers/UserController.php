<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use Session;
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
            return back()->withErrors([
                'password'=>['The provided password does not match our records']
            ]);
        }
        
        else
        {
            $req->session()->put('user',$user);
            $req->session()->flash('login','Successful login');
            return redirect('home');
        }
        
    }

    function register(Request $req)
    {
        $req->validate([
            'name'=>['required','string'],
            'email'=>['required','string'],
            'password'=>['required']
        ]);
        $user=User::where(['email'=>$req->email])->first();
        if(!$user){
        $user= new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->role_id=2;
        $user->password= Hash::make($req->password);
        $user->save();
        $req->session()->flash('reg','Successful Registered');
        return redirect('login');
        }
        
        else{
            return back()->withErrors([
                'email'=>['The email alredy used']
            ]);

        }

        
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
