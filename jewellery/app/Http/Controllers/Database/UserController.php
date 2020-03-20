<?php

namespace App\Http\Controllers\Database;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function add_user(Request $request)
	{
		    public function __construct()
    {
    	if (\Request::is('admin/*')) { 
  $this->middleware('auth:admin');
//  dd(url()->current());
}
else if (\Request::is('writer/*')) { 
  $this->middleware('auth:writer');
 // dd("hh1");
}
      	
    }
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
            ->update(['profile_pic' => "/img/profile/".strval($user->id).".".$request->file('b_img')->getClientOriginalExtension()]);

				$imageName = strval($user->id).'.'.$request->file('b_img')->getClientOriginalExtension();
				$request->file('b_img')->move(public_path('/img/profile'), $imageName);
				$user->save();
			};
		};
		
		 return redirect('/home');
		
	}
	  public function view_users()
	{		
		
			$users = DB::table('user')->get();
			return view('admin.pages.user_lists',['users' => $users]);
		
	
	}
		public function view_user($id)
	{		
		
			$users = DB::table('user')->where('id',$id)->get();
			return view('admin.pages.user-detail',['users' => $users]);
	}
}
