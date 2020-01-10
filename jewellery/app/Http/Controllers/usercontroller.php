<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use App\User;

class usercontroller extends Controller
{
    //
    public function index(){
    	// $users=DB::table('users')->get();
    	$users=User::get();
    	return view('admin.pages.user',['users'=>$users]);
    }

    public function authen() {
    	
    }


}
