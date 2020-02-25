<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
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
        return view('admin.pages.chat',['temp_convs' => $conv_rst]);
    }
}
