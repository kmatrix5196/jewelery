<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Wishlist;
use App\Models\Product;
use App\Models\Conversation;
use App\Models\Admin;
use App\Models\Company;
use App\Models\Conversation_Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
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

    public function view_cart(){
        $userid=auth()->user()->id;
        //DB::enableQueryLog();
        $cart=Cart::leftJoin('product','product.id','=','cart.product_id')
        ->where('cart.user_id','=',$userid)
        ->leftJoin('gallery','gallery.product_id','=','cart.product_id')
        ->where('gallery.type','=','typemain')
        ->select('cart.*','cart.id as c_id','product.*','product.id as p_id','gallery.url')
        ->get();
        //dd(DB::getQueryLog());
        return view('client.pages.cart',['cart'=>$cart]);
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
    public function sendMessage(Request $request)
    {
        $conv_dtl = new Conversation_Detail;
        if ($request->file('chat-file-upload')) {
            $ldate = date('Y-m-d-H-i-s');
            $imageName = strval('C'.$request->conv_id.'_'.$ldate).'.'.$request->file('chat-file-upload')->getClientOriginalExtension();
            $request->file('chat-file-upload')->move(public_path('/img/chat'), $imageName);
            $conv_dtl->src = '/img/chat/'.$imageName;
            $conv_dtl->type = 1;
          //   return response()->json([
          //  'name'   => '/img/chat/'.$imageName,
          //  'id' => $request->conv_id
          // ]);
        } else {
            $conv_dtl->src = null;
            $conv_dtl->type = 0;
        }
        
        $conv_dtl->content = $request->message;
        $conv_dtl->r_status = 0;
        $conv_dtl->s_status = 1;
        $conv_dtl->send_o_recieve = 0;
        $conv_dtl->conv_id = $request->conv_id;
        $conv_dtl->save();
        $conv_dtl['status'] = 0;
        return $conv_dtl;
    }
    public function viewConversation(Request $request)
    {
        $temp_conv = Conversation::where([
            ['conv_id', '=', $request->conv_id],
            ['sender_id', '=', Auth::id()]
        ])->first();
        if ($temp_conv) {
            if ($temp_conv['type'] == 'company')
            {
                $info_rst = Company::select('name','profile_pic')->where('id', '=', $temp_conv['reciever_id'])->first();
                $temp_conv['name'] = ucfirst($info_rst['name']);
                $temp_conv['profile_pic'] = $info_rst['profile_pic'];
            }
            if ($temp_conv['type'] == 'admin')
            {
                $info_rst = Admin::select('name')->where('id', '=', $temp_conv['reciever_id'])->first();
                $temp_conv['name'] = ucfirst($info_rst['name']);
                $temp_conv['profile_pic'] = '/img/admin.png';
            }
            $temp_conv_rst = Conversation_Detail::where('conv_id', '=',$request->conv_id)->get();
            // Conversation_Detail::where(['conv_id' => $request->conv_id])->update(['r_status'=>0]);
            return view('client.partials.chat_detail',['info_rst' => $temp_conv, 'temp_conv_rst' => $temp_conv_rst ]);
        }
        // if ($temp_conv)
        // {
        //     $temp_conv_rst = Conversation_Detail::get();
        //     Conversation_Detail::where(['conv_id' => $request->conv_id])->update(['r_status'=>0]);
        //     return $temp_conv_rst;
        // }
        // else
        // {
        //     return "";
        // }
    }

    public function getMessage(Request $request)
    {
        $temp_conv_rst = null;
        $temp_ttl_noti = 0;
        if ($request -> message == 1)
        {
            $temp_conv_rst = Conversation_Detail::where([
                ['conv_id','=',$request->conv_id],
                ['r_status','=',1]
            ])->get();
            Conversation_Detail::where(['conv_id' => $request->conv_id])->update(['r_status'=>0]);
        }
        
        $temp_conv_alert = Conversation::where([
            ['sender_id','=',Auth::id()]
        ])->get();
        
        if ($temp_conv_alert) {
            foreach ($temp_conv_alert as $key => $value) {
                $pending = Conversation_Detail::where([['r_status','=',1],['conv_id','=',$value->conv_id]])->groupBy('conversation_detail.conv_id')->sum('r_status');
                $temp_conv_alert[$key]['pending'] = $pending;
                $temp_ttl_noti += $pending;
            }
        }

        
        return response()->json(['status'=>0,'message'=>'Message sent successfully','data'=>$temp_conv_rst,'alert' => $temp_conv_alert, 'notification' => $temp_ttl_noti]);
    }
}
