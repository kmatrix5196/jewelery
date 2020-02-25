<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth:company');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function profile()
    {
        return view('client.pages.company_profile');
    }
    public function chat(Request $request)
    {
        $conv_rst = Conversation::where([['reciever_id', $request->u_id],['type', 'company']])->get();
        return view('client.pages.chat',['temp_convs' => $conv_rst]);
    }
}
