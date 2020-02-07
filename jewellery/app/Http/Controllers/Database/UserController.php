<?php

namespace App\Http\Controllers\Database;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function add_user(Request $request)
	{
		// Validate the request...

		$user = new User;
		$user->first_name=$request->fname;
		$user->last_name=$request->lname;
		$user->password=$request->password;
		$user->email=$request->email;
		$user->phone=$request->tel;
		$user->address=$request->address;	
		$user->save();
		if ($user->save()) {
			if ($request->file('profile') == null) {
				$file = "";
			}
			else{
			$user
            ->where(max('id'))
            ->update(['profile_pic' => "/img/profile/".strval($user->max(id)).".".$request->file('profile')->extension()]);

				$imageName = strval($user->max(id)).'.'.$request->file('profile')->getClientOriginalExtension();
				$request->file('profile')->move(public_path('/img/profile'), $imageName);
				$blog_img->save();
			};
		};
		
		 return redirect()->route('home');
		
	}
}
