<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.pages.index');
    }

    public function userList(){
     $data = User::orderBy('id', 'desc')->get();

       return view('dashboard.pages.user-list', ['users' => $data]);
    }
    
    //public function userList(){

     // return view('dashboard.pages.user-list');
    

    public function userDelete($id){

        User::where('id', $id)->first()->delete();

        Alert::success("User deleted successfully!!");
        return redirect()->back();
    }
    
}
