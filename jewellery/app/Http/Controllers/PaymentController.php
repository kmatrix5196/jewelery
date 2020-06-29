<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Cart_history;
use App\Models\Order;
use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PaymentController extends Controller
{

	public function __construct()
	{
		 $this->middleware('auth:user');
	}

	public function check_out(Request $request)
	{
		$userid=auth()->user()->id;
		$cart = Cart::leftJoin('product','product.id','=','cart.product_id')
		->where('cart.user_id','=',$userid)
		->select('cart.*','cart.id as c_id','product.*','product.id as p_id')
		->get();
		
		
		$order=new Order;
		$order->user_id=$userid;
		$order->payment_method=$request->payment_method;
		$order->save();
		
		if ($order->save()) {
			$order_id=$order->max('id');
			$order=Order::where('id','=',$order_id)->first();
			$order->payment_photo="/img/payment/".strval($order_id).$request->file('payment_photo')->getClientOriginalExtension();
			$imageName = strval($order_id).$request->file('payment_photo')->getClientOriginalExtension();
			$request->file('payment_photo')->move(public_path('/img/payment'), $imageName);
			$order->save();

			
			foreach($cart as $c){
				$cart_history=new Cart_history;
				$cart_history->user_id=$userid;
				$cart_history->product_id=$c->p_id;
				$cart_history->order_id=$order_id;
				$cart_history->checkout=1;
				$cart_history->quantity=$c->quantity;
				$cart_history->save();	
				Cart::where('id','=', $c->c_id)->delete();
			}

		}
		 toast('Your Request has been submited!','success');
		return redirect()->route('view_cart');
	}
}
