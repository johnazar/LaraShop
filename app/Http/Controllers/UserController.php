<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
    	$users = User::where('is_admin','!=',1)->get(); 
    	return view('admin.user.index',compact('users'));
    }
}
