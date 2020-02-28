<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Wishlist;
use App\Models\Product;
use App\Models\Conversation;
use App\Models\Admin;
use App\Models\Company;
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
        $userid=auth()->user()->id;
        $cart->user_id=$userid;
        $cart->product_id=$request->product_id;
        $cart->quantity=$request->qty;
        $cart->save();
        return redirect()->route('view_product_user');

    }
    public function add_to_wishlist($id)
    {
        $wishlist=new Wishlist;
        $userid=auth()->user()->id;
        $company_id =  Product::leftJoin('company','product.company_id','=','company.id')
        ->where('product.id','=',$id)
        ->select('company.id as c_id')
        ->first();
        $wishlist->user_id=$userid;
        $wishlist->product_id=$id;
        $wishlist->company_id=$company_id['c_id'];
        $wishlist->save();
        return redirect()->route('view_product_user');
    }
    public function view_wishlist(){
        $userid=auth()->user()->id;
        $wishlist=Wishlist::leftJoin('product','product.id','=','wishlist.product_id')
        ->where('wishlist.user_id','=',$userid)
        ->leftJoin('gallery','gallery.product_id','=','wishlist.product_id')
        ->where('gallery.type','=','typemain')
        ->select('product.*','product.id as p_id','wishlist.*','gallery.id as g_id','gallery.url')
        ->get();
        return view('client.pages.wishlist',['wishlist'=>$wishlist]);
    }
    public function delete_wishlist($id){
        Wishlist::where('id', '=', $id)->delete();
        return redirect()->route('wishlist');
    }
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
    public function chat(Request $request)
    {
        $conv_rst = Conversation::where('sender_id', '=',  $request->u_id)->get();
        if ($conv_rst) {
            foreach ($conv_rst as $value) {
                if ($value['type'] == 'company')
                {
                     $info_rst = Company::select('name','profile_pic')->where('id', '=', $value['reciever_id'])->first();
                     $value['name'] = ucfirst($info_rst['name']);
                     $value['profile_pic'] = $info_rst['profile_pic'];
                }
                if ($value['type'] == 'admin')
                {
                     $info_rst = Admin::select('name')->where('id', '=', $value['reciever_id'])->first();
                     $value['name'] = ucfirst($info_rst['name']);
                     $value['profile_pic'] = '/img/admin.png';
                }
            }
        }
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
        return view('client.pages.chat',['temp_convs' => $conv_rst],['rst_con'=>$temp_conv_rst['conv_id']]);

    }
    public function createconpre(Request $request)
    {
        $temp_conv_rst = Conversation::where([
            ['sender_id', '=', $request->u_id],
            ['reciever_id', '=', $request->c_id],
            ['type', '=', 'admin']
        ])->first();
        if (! $temp_conv_rst) {
            $con = new Conversation;
            $con->sender_id=$request->u_id;
            $con->reciever_id=$request->c_id;
            $con->type="admin";
            $con->save();
        }
        $conv_rst = Conversation::where('sender_id', '=',  $request->u_id)->get();
        return view('client.pages.chat',['temp_convs' => $conv_rst],['rst_con'=>$temp_conv_rst['conv_id']]);

    }
}
