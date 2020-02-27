<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth:user');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function add_to_cart(Request $request)
    {
        
        $cart=new Cart;
        
        $cart->product_id=$request->product_id;
        $cart->quantity=$request->qty;
        $cart->save();
        return redirect()->route('view_product_user');
    }
    public function profile()
    {
        return view('client.pages.my_account');
    }
    // public function chat()
    // {
    //     return view('client.pages.chat');
    // }
    public function chat(Request $request)
    {
        $conv_rst = Conversation::where('sender_id', '=',  $request->u_id)->get();
        return view('client.pages.chat',['temp_convs' => $conv_rst]);
    }
    public function createcon(Request $request)
    {
        $temp_conv_rst = Conversation::where([
            ['sender_id', '=', $request->u_id],
            ['reciever_id', '=', $request->c_id],
            ['type', '=', 'company']
        ])->first();
        if (! $temp_conv_rst) {
            $con = new Conversation;
            $con->sender_id=$request->u_id;
            $con->reciever_id=$request->c_id;
            $con->type="company";
            $con->save();
        }
        $conv_rst = Conversation::where('sender_id', '=',  $request->u_id)->get();
        return view('client.pages.chat',['temp_convs' => $conv_rst],['temp_con'=>$temp_conv_rst['conv_id']]);

    }
}
