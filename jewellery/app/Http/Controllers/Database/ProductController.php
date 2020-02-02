<?php

namespace App\Http\Controllers\Database;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
	
	/**
	 * Create a new product instance.
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function view_product()
	{		
		if (\Request::is('admin/*'))
		{
			$temp_products = Product::orderBy('id','ASC')->paginate(12);
			return view('admin.pages.product_list',['temp_products' => $temp_products]);
		}
		else { 
			$temp_products = Product::orderBy('created_at','DESC')->paginate(12);
			return view('client.pages.shop',['temp_products' => $temp_products]);
		}
		
	}
	public function view_product_dtl($id)
	{
		// Validate the request...
		$product_rst = Product::where('id','=', $id)->first();
		$temp_products = Product::orderBy('created_at','DESC')->limit(6)->get();
		
		if (\Request::is('admin/*'))
		{
			return view('admin.pages.edit_products',['temp_product' => $product_rst]);
		}
		else { 
			return view('client.pages.product-details',['temp_product' => $product_rst,'temp_products' => $temp_products]);
		}
	}

	public function add_product(Request $request)
	{
		// Validate the request...

		$product = new Product;
		$product->name = $request->p_name;
		$product->subtitle = $request->p_subtitle;
		$product->price = $request->p_price;
		$product->discount = $request->p_discount;
		$product->description = $request->p_dscrp;
		$product->status = $request->p_status;
		$product->meta_title = $request->p_meta_title;
		$product->thumbnail = "/img/product/".$request->p_thumbnail;
		$product->additional_information = $request->p_add_info;
		$product->instock = $request->p_instock;
		$product->company_id = 123;
		$product->product_code = $request->p_code;
		$product->save();
		// if ($product->save()) {
		// 	return redirect('/admin/product/view/'.$product->id);
		// }
		return redirect()->route('view_product');
	}

	public function edit_product($id)
	{
		// Validate the request...

		$product_rst = Product::where('id', '=', $id)->first();
		return view('admin.pages.edit_products',['temp_product' => $product_rst]);
	}

	public function update_product(Request $request)
	{
		// Validate the request...
		$product = Product::where('id','=', $request->p_id)->first();
		$product->name = $request->p_name;
		$product->subtitle = $request->p_subtitle;
		$product->price = $request->p_price;
		$product->discount = $request->p_discount;
		$product->description = $request->p_dscrp;
		$product->status = $request->p_status;
		$product->meta_title = $request->p_meta_title;
		$product->thumbnail = "/img/product/".$request->p_thumbnail;
		$product->additional_information = $request->p_add_info;
		$product->instock = $request->p_instock;
		$product->company_id = 123;
		$product->product_code = $request->p_code;
		$product->save();
		return redirect()->route('view_product');
	}

	public function delete_product($id)
	{
		// Validate the request...

		Product::where('id', '=', $id)->delete();
		return redirect()->route('view_product');
	}
	
}
