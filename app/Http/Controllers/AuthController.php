<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function index()
    {
        return view('pages.register');
    }

    public function signup(Request $req)
    {
        

        $data = ([
            'name' => $req->name,
            'email' => $req->email,
            'address' => $req->address,
            'password' => Hash::make($req->password)
        ]);

        User::create($data);
        Alert::success('Success', 'You have succcessfully registerd!');
        return redirect()->route('login');
    }
    public function login()
    {
        return view('pages.login');
    }

    public function loginCheck(Request $req)
    {
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
            if (Auth::user()->is_admin == false) {
                Alert::success('Success', 'You have successfully logged in');
                return redirect()->route('home');
            } else if (Auth::user()->is_admin == true) {
                Alert::success('Success', 'You have successfully logged in');
                return redirect()->route('admin');
            }
        }
        Alert::error('Email or password you have enterd is incorrect');
        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        Alert::success('You have successfully logged out!!');
        return redirect()->route('login');
    }


    public function reservation()
    {
        return view('pages.reservation');
    }


}
