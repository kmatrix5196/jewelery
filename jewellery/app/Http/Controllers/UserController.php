<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Wishlist;
use App\Models\Product;
use App\Models\Conversation;
use App\Models\Admin;
use App\Models\Company;
use App\Models\Conversation_Detail;
use App\Models\Cart_history;
use App\Models\Gallery;
use App\Models\Premium;
use App\Models\Blog;
use Carbon\Carbon;
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

    public function view_index(){
       // $this->middleware('auth:user');
        // parent::__construct();
        $userid = Auth::id();

        // echo $userid;
        $temp_products =  Product::leftJoin('gallery', 'product.id', '=', 'gallery.product_id')
        ->where('gallery.type','=','typemain')
        ->leftJoin('company','product.company_id','=','company.id')
        ->select('product.*','gallery.url','company.name as c_name')
        ->orderBy('product.created_at','DESC')
        ->get();
        $design_products=Product::leftJoin('gallery', 'product.id', '=', 'gallery.product_id')
        ->where('gallery.type','=','typemain')
        ->where('product.highlight','=','design')
        ->select('product.*','gallery.url')
        ->orderBy('product.created_at','DESC')
        ->get();
        $value_products=Product::leftJoin('gallery', 'product.id', '=', 'gallery.product_id')
        ->where('gallery.type','=','typemain')
        ->where('product.highlight','=','value')
        ->select('product.*','gallery.url')
        ->orderBy('product.created_at','DESC')
        ->get();
        $cart=Cart::leftJoin('product','product.id','=','cart.product_id')
        ->where('cart.user_id','=',$userid)
        ->leftJoin('gallery','gallery.product_id','=','cart.product_id')
        ->where('gallery.type','=','typemain')
        ->select('cart.*','cart.id as c_id','product.*','product.id as p_id','gallery.url')
        ->get();
        return view('client.pages.index',['temp_products' => $temp_products,'design_products'=>$design_products,'value_products'=>$value_products,'cart'=>$cart]);
    }
    public function view_shop(){
        $userid = Auth::id();
         $cart=Cart::leftJoin('product','product.id','=','cart.product_id')
        ->where('cart.user_id','=',$userid)
        ->leftJoin('gallery','gallery.product_id','=','cart.product_id')
        ->where('gallery.type','=','typemain')
        ->select('cart.*','cart.id as c_id','product.*','product.id as p_id','gallery.url')
        ->get();
        $temp_products =  Product::leftJoin('gallery', 'product.id', '=', 'gallery.product_id')->where('gallery.type','=','typemain')->leftJoin('company','product.company_id','=','company.id')->select('product.*','gallery.url','company.name as c_name')->orderBy('product.created_at','DESC')->paginate(12);
    return view('client.pages.shop',['temp_products' => $temp_products,'cart'=>$cart]);
    }
    public function view_shop_detail($id){
        $userid = Auth::id();
         $cart=Cart::leftJoin('product','product.id','=','cart.product_id')
        ->where('cart.user_id','=',$userid)
        ->leftJoin('gallery','gallery.product_id','=','cart.product_id')
        ->where('gallery.type','=','typemain')
        ->select('cart.*','cart.id as c_id','product.*','product.id as p_id','gallery.url')
        ->get();
        $product_rst = Product::leftJoin('company','product.company_id','=','company.id')
        ->where('product.id','=', $id)
        ->select('product.*','company.name as c_name')->first();

        $temp_products = Product::orderBy('created_at','DESC')->limit(6)->get();
        $gallerymain=Gallery::where('product_id','=',$id)->where('type','typemain')->first();
        return view('client.pages.product-details',['temp_product' => $product_rst,'temp_products' => $temp_products,'gallerymain' => $gallerymain,'cart'=>$cart]);
    
    }
    public function view_premium(){
        $userid = Auth::id();
         $cart=Cart::leftJoin('product','product.id','=','cart.product_id')
        ->where('cart.user_id','=',$userid)
        ->leftJoin('gallery','gallery.product_id','=','cart.product_id')
        ->where('gallery.type','=','typemain')
        ->select('cart.*','cart.id as c_id','product.*','product.id as p_id','gallery.url')
        ->get();
        $premium = DB::table('premium')->select('id','photo','company_id')->get();
            return view('client.pages.premium_show',['premium' => $premium,'cart'=>$cart]);
    }
    public function view_premium_detail($id){
        $userid = Auth::id();
         $cart=Cart::leftJoin('product','product.id','=','cart.product_id')
        ->where('cart.user_id','=',$userid)
        ->leftJoin('gallery','gallery.product_id','=','cart.product_id')
        ->where('gallery.type','=','typemain')
        ->select('cart.*','cart.id as c_id','product.*','product.id as p_id','gallery.url')
        ->get();
        $premium = DB::table('premium')->where('id',$id)->get();
            return view('client.pages.premium-detail',['premium' => $premium,'cart'=>$cart]);
    }
    public function view_blog(){
        $userid = Auth::id();
         $cart=Cart::leftJoin('product','product.id','=','cart.product_id')
        ->where('cart.user_id','=',$userid)
        ->leftJoin('gallery','gallery.product_id','=','cart.product_id')
        ->where('gallery.type','=','typemain')
        ->select('cart.*','cart.id as c_id','product.*','product.id as p_id','gallery.url')
        ->get();
        $temp_blogs = Blog::leftJoin('blog_image','blog_image.blog_id', '=', 'blog.blog_id')->orderBy('blog.date','ASC')->get();
                
            $cur_time = Carbon::now();
            //DB::enableQueryLog();

            $near_blog = Blog::leftJoin('blog_image','blog_image.blog_id', '=', 'blog.blog_id')->whereDate('date', '>=', $cur_time)->orderBy('blog.date','ASC')->first();
//dd(DB::getQueryLog());
            return view('client.pages.trade_show',['temp_blogs' => $temp_blogs,'near_blog'=>$near_blog,'cart'=>$cart]);
    }
    public function view_blog_detail($id){
        $userid = Auth::id();
         $cart=Cart::leftJoin('product','product.id','=','cart.product_id')
        ->where('cart.user_id','=',$userid)
        ->leftJoin('gallery','gallery.product_id','=','cart.product_id')
        ->where('gallery.type','=','typemain')
        ->select('cart.*','cart.id as c_id','product.*','product.id as p_id','gallery.url')
        ->get();
        $blog = DB::table('blog')->where('blog_id',$id)->get();
            $blog_images=DB::table('blog_image')->where('blog_id',$id)->get();
            return view('client.pages.blog-details',['blog' => $blog,'blog_images'=>$blog_images,'cart'=>$cart]);
    }
    public function view_supplier(){
        $userid = Auth::id();
         $cart=Cart::leftJoin('product','product.id','=','cart.product_id')
        ->where('cart.user_id','=',$userid)
        ->leftJoin('gallery','gallery.product_id','=','cart.product_id')
        ->where('gallery.type','=','typemain')
        ->select('cart.*','cart.id as c_id','product.*','product.id as p_id','gallery.url')
        ->get();
        $companies = DB::table('company')->get();
      return view('client.pages.supplier',['companies' => $companies,'cart'=>$cart]);
    }
    public function view_supplier_detail($id){
        $userid = Auth::id();
         $cart=Cart::leftJoin('product','product.id','=','cart.product_id')
        ->where('cart.user_id','=',$userid)
        ->leftJoin('gallery','gallery.product_id','=','cart.product_id')
        ->where('gallery.type','=','typemain')
        ->select('cart.*','cart.id as c_id','product.*','product.id as p_id','gallery.url')
        ->get();
        $company = DB::table('company')->where('id',$id)->get();
            return view('admin.pages.company_detail',['company' => $company,'cart'=>$cart]);
    }

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
    public function delete_cart($id){
        $cart=Cart::leftJoin('product','product.id','=','cart.product_id')
        ->where('cart.id','=',$id)
        ->leftJoin('gallery','gallery.product_id','=','cart.product_id')
        ->where('gallery.type','=','typemain')
        ->select('cart.*','cart.id as c_id','product.*','product.id as p_id','gallery.url')
        ->first();
        $cart_history=new Cart_history;
        $cart_history->user_id=auth()->user()->id;
        $cart_history->product_id=$cart->p_id;
        $cart_history->checkout=0;
        $cart_history->quantity=$cart->quantity;
        $cart_history->save();  

        Cart::where('id','=',$id)->delete();
        return redirect()->route('view_cart');
    }
    public function update_cart(Request $request){
       $cart= Cart::where('id','=',$request->cart_id)->first();
       $cart->quantity=$request->quantity;
       $cart->save();
       return response()->json(['success'=>'Ajax request submitted successfully']);
       
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
        $conv_rst = Conversation::where('sender_id', '=',  $request->u_id)->orderBy('updated_at', 'desc')->get();
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
            ['sender_id', '=', Auth::id()],
            ['reciever_id', '=', $request->c_id],
            ['type', '=', 'company']
        ])->first();
        $conv_id = null;
        if (! $temp_conv_rst) {
            $con = new Conversation;
            $con->sender_id=Auth::id();
            $con->reciever_id=$request->c_id;
            $con->type="company";
            $con->save();
            $conv_id=$con->id;
        }
        else {
            $conv_id=$temp_conv_rst->conv_id;
        }

        $conv_dtl = new Conversation_Detail;
        if ($request->file('chat-file-upload')) {
            $ldate = date('Y-m-d-H-i-s');
            $imageName = strval('C'.$request->conv_id.'_'.$ldate).'.'.$request->file('chat-file-upload')->getClientOriginalExtension();
            $request->file('chat-file-upload')->move(public_path('/img/chat'), $imageName);
            $conv_dtl->src = '/img/chat/'.$imageName;
            $conv_dtl->type = 1;
        } else {
            $conv_dtl->src = null;
            $conv_dtl->type = 0;
        }
        $conv_dtl->content = $request->message;
        $conv_dtl->r_status = 0;
        $conv_dtl->s_status = 1;
        $conv_dtl->send_o_recieve = 0;
        $conv_dtl->conv_id = $conv_id;
        $conv_dtl->save();
        $conv_dtl['status'] = 0;
        return $conv_dtl;

    }
    public function createconpre(Request $request)
    {
        $temp_conv_rst = Conversation::where([
            ['sender_id', '=', Auth::id()],
            ['reciever_id', '=', $request->c_id],
            ['type', '=', 'admin']
        ])->first();
        $conv_id = null;
        if (! $temp_conv_rst) {
            $con = new Conversation;
            $con->sender_id=Auth::id();
            $con->reciever_id=$request->c_id;
            $con->type="admim";
            $con->save();
            $conv_id=$con->id;
        }
        else {
            $conv_id=$temp_conv_rst->conv_id;
        }

        $conv_dtl = new Conversation_Detail;
        if ($request->file('chat-file-upload')) {
            $ldate = date('Y-m-d-H-i-s');
            $imageName = strval('C'.$request->conv_id.'_'.$ldate).'.'.$request->file('chat-file-upload')->getClientOriginalExtension();
            $request->file('chat-file-upload')->move(public_path('/img/chat'), $imageName);
            $conv_dtl->src = '/img/chat/'.$imageName;
          
        } else {
            $conv_dtl->src = null;
            $conv_dtl->type = 0;
        }
        $conv_dtl->content = $request->message;
        $conv_dtl->r_status = 0;
        $conv_dtl->s_status = 1;
        $conv_dtl->send_o_recieve = 0;
        $conv_dtl->conv_id = $conv_id;
        $conv_dtl->save();
        $conv_dtl['status'] = 0;
    
        return $conv_dtl;

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
        Conversation::find($request->conv_id)->touch();
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
