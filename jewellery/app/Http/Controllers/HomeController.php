<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function profile()
    {
        return view('client.pages.my_account');
    }
    public function fileupload(Request $request)
    {
        $ldate = date('Y-m-d-H-i-s');
        $imageName = strval('C'.$request->conv_id.'_'.$ldate).'.'.$request->file('chat-file-upload')->getClientOriginalExtension();
        $request->file('chat-file-upload')->move(public_path('/img/chat'), $imageName);
        return response()->json([
       'name'   => '/img/chat/'.$imageName,
       'id' => $request->conv_id
      ]);
    }
}
