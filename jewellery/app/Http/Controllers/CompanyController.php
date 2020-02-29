<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\User;
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
        if ($conv_rst) {
            foreach ($conv_rst as $value) {
                 $info_rst = User::select('first_name', 'last_name', 'profile_pic')->where('id', '=', $value['reciever_id'])->first();
                 $value['name'] = ucfirst($info_rst['first_name'].' '.$info_rst['last_name']);
                 $value['profile_pic'] = $info_rst['profile_pic'];
            }
        }
        return view('client.pages.chat',['temp_convs' => $conv_rst]);
    }

}
