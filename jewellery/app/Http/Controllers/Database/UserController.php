<?php

namespace App\Http\Controllers\Database;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
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
		$user->password=Hash::make($request->password);
		$user->email=$request->email;
		$user->phone=$request->tel;
		$user->address=$request->address;	
		$user->save();
		if ($user->save()) {
			if ($request->file('b_img') == null) {
				$file = "";
			}
			else{
			$user
            ->where('id',$user->max('id'))
            ->update(['profile_pic' => "/img/profile/".strval($user->id).".".$request->file('b_img')->extension()]);

				$imageName = strval($user->id).'.'.$request->file('b_img')->getClientOriginalExtension();
				$request->file('b_img')->move(public_path('/img/profile'), $imageName);
				$user->save();
			};
		};
		
		 return redirect('/home');
		
	}
}
