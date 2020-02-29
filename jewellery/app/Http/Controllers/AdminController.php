<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.pages.index');
    }
    public function chat(Request $request)
    {
        $conv_rst = Conversation::where([['reciever_id', $request->u_id],['type', 'admin']])->get();
        if ($conv_rst) {
            foreach ($conv_rst as $value) {
                 $info_rst = User::select('first_name', 'last_name', 'profile_pic')->where('id', '=', $value['reciever_id'])->first();
                 $value['name'] = ucfirst($info_rst['first_name'].' '.$info_rst['last_name']);
                 $value['profile_pic'] = $info_rst['profile_pic'];
            }
        }
        return view('admin.pages.chat',['temp_convs' => $conv_rst]);
    }
}
