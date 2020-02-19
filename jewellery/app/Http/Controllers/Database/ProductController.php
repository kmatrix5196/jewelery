<?php

namespace App\Http\Controllers\Database;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Gallery;
use App\Models\Company;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
	
	/**
	 * Create a new product instance.
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function add()
	{	

			$company = Company::orderBy('name','ASC')->get();
			return view('admin.pages.add-product',['company' => $company]);
		
		
		
	}
	public function view_product()
	{		
		if (\Request::is('admin/*'))
		{
			

			$temp_products = Product::leftJoin('gallery', 'product.id', '=', 'gallery.product_id')->where('gallery.type','=','typemain')->get();
			return view('admin.pages.product_list',['temp_products' => $temp_products]);
		}
		else { 
			$temp_products = Product::orderBy('created_at','DESC')->paginate(12);
			return view('client.pages.shop',['temp_products' => $temp_products]);
		}
		
	}

	public function view_product_dtl($id)
	{
		$product = DB::table('product')->where('id',$id)->get();
		foreach($product as $pro)
			$id1=$pro->id;
		$gallery=DB::table('gallery')->where('product_id',$id1)->orderBy('id')->get();
			return view('admin.pages.product-detail',['product' => $product,'gallery'=>$gallery]);
	}
	
	public function add_product(Request $request)
	{
		$company_name = $request->p_company_name;
		$company_id = DB::table('company')->where('name',$company_name)->value('id');
		
		// Validate the request...

		$product = new Product;
		$gallery=new Gallery;
		$gallery1=new Gallery;
		$gallery2=new Gallery;
		$product->name = $request->p_name;
		$product->category = $request->p_category;
		$product->price = $request->p_price;
		$product->discount = $request->p_discount;
		$product->description = $request->p_dscrp;
		$product->jewellery=$request->p_jewellery;
		$product->highlight = $request->p_highlight;
		$product->additional_information = $request->p_add_info;
		$product->instock = $request->p_instock;
		$product->company_id = $company_id;
		$product->product_code = $request->p_code;
		$product->save();

		if ($product->save()) {
			$product_id=$product->max('id');
			if ($request->file('p_image_typemain') == null) {
				$file = "";
			}
			else{
			$gallery->product_id=$product_id;
			$gallery->url="/img/product/".strval($product_id)."typemain.".$request->file('p_image_typemain')->getClientOriginalExtension();
			$gallery->type='typemain';
			$gallery->save();
			$imageName = strval($product_id).'typemain.'.$request->file('p_image_typemain')->getClientOriginalExtension();
			$request->file('p_image_typemain')->move(public_path('/img/product'), $imageName);
			};



			if ($request->file('p_image_type1') == null) {
				$file = "";
			}
			else{
			$product_id=$product->max('id');
			
			$gallery1->product_id=$product_id;
			$gallery1->url="/img/product/".strval($product_id)."type1.".$request->file('p_image_type1')->getClientOriginalExtension();
			$gallery1->type='type1';
			$gallery1->save();
						
			$imageName = strval($product_id).'type1.'.$request->file('p_image_type1')->getClientOriginalExtension();
			$request->file('p_image_type1')->move(public_path('/img/product'), $imageName);
			};


			if ($request->file('p_image_type2') == null) {
				$file = "";
			}
			else{
			$gallery2->product_id=$product_id;
			$gallery2->url="/img/product/".strval($product_id)."type2.".$request->file('p_image_type2')->getClientOriginalExtension();
			$gallery2->type='type2';
			$gallery2->save();
			
			$imageName = strval($product_id).'type2.'.$request->file('p_image_type2')->getClientOriginalExtension();
			$request->file('p_image_type2')->move(public_path('/img/product'), $imageName);
			};
		};
		
		// if ($product->save()) {
		// 	return redirect('/admin/product/view/'.$product->id);
		// }
		return redirect()->route('view_product');
	}

	public function edit_product($id)
	{
		$company = Company::orderBy('name','ASC')->get();
		$product_rst = Product::where('id', '=', $id)->first();
		$gallery1=Gallery::where('product_id','=',$id)->where('type','=','typemain')->first();
		$gallery2=Gallery::where('product_id','=',$id)->where('type','=','type1')->first();
		$gallery3=Gallery::where('product_id','=',$id)->where('type','=','type2')->first();
		return view('admin.pages.edit_product',['temp_product' => $product_rst,'gallery1'=> $gallery1,'gallery2'=> $gallery2,'gallery3'=> $gallery3,'company'=>$company]);
	}

	public function update_product(Request $request)
	{
		$company_name = $request->p_company_name;
		$company_id = DB::table('company')->where('name',$company_name)->value('id');
		// Validate the request...
		$product = Product::where('id','=', $request->p_id)->first();
		$gallery=Gallery::where('product_id','=', $request->p_id)->where('type','=','typemain')->first();
		$gallery1=Gallery::where('product_id','=', $request->p_id)->where('type','=','type1')->first();
		$gallery2=Gallery::where('product_id','=', $request->p_id)->where('type','=','type2')->first();
		$product->name = $request->p_name;
		$product->category = $request->p_category;
		$product->price = $request->p_price;
		$product->discount = $request->p_discount;
		$product->description = $request->p_dscrp;
		$product->highlight=$request->p_highlight;
		$product->jewellery = $request->p_jewellery;
		$product->additional_information = $request->p_add_info;
		$product->instock = $request->p_instock;
		$product->company_id = $company_id;
		$product->product_code = $request->p_code;
		$product->save();
		
			$product_id=$request->p_id;
			if ($request->file('p_image_typemain') == null) {
				$file = "";
			}
			else{
			$gallery->product_id=$product_id;
			$gallery->url="/img/product/".strval($product_id)."typemain.".$request->file('p_image_typemain')->getClientOriginalExtension();
			$gallery->type='typemain';
			$gallery->save();
			$imageName = strval($product_id).'typemain.'.$request->file('p_image_typemain')->getClientOriginalExtension();
			$request->file('p_image_typemain')->move(public_path('/img/product'), $imageName);
			};



			if ($request->file('p_image_type1') == null) {
				$file = "";
			}
			else{
			$product_id=$product->max('id');
			
			$gallery1->product_id=$product_id;
			$gallery1->url="/img/product/".strval($product_id)."type1.".$request->file('p_image_type1')->getClientOriginalExtension();
			$gallery1->type='type1';
			$gallery1->save();
						
			$imageName = strval($product_id).'type1.'.$request->file('p_image_type1')->getClientOriginalExtension();
			$request->file('p_image_type1')->move(public_path('/img/product'), $imageName);
			};


			if ($request->file('p_image_type2') == null) {
				$file = "";
			}
			else{
			$gallery2->product_id=$product_id;
			$gallery2->url="/img/product/".strval($product_id)."type2.".$request->file('p_image_type2')->getClientOriginalExtension();
			$gallery2->type='type2';
			$gallery2->save();
			
			$imageName = strval($product_id).'type2.'.$request->file('p_image_type2')->getClientOriginalExtension();
			$request->file('p_image_type2')->move(public_path('/img/product'), $imageName);
			};
		
		
		return redirect()->route('view_product');
	}

	public function delete_product($id)
	{
		// Validate the request...

		Product::where('id', '=', $id)->delete();
		return redirect()->route('view_product');
	}
	
}
