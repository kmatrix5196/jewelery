<?php

namespace App\Http\Controllers\Database;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    //
	public function view_admin()
	{
		if(\Request::is('admin/*'))
		{
			
			$admin=Admin::all();
			return view('admin.pages.profile',['admin'=>$admin]);
		}
	}
}
