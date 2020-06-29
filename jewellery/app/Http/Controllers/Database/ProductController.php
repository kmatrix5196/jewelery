<?php

namespace App\Http\Controllers\Database;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Gallery;
use App\Models\Company;
use App\Models\Cart;
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
		    public function __construct()
    {
    	if (\Request::is('admin/*')) { 
  $this->middleware('auth:admin');
//  dd(url()->current());
}
else if (\Request::is('writer/*')) { 
  $this->middleware('auth:writer');
 // dd("hh1");
}
else{
	$this->middleware('auth:user');
}
      	
    }

	public function view_index(){
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

		$userid=auth()->user()->id;
		$cart=Cart::leftJoin('product','product.id','=','cart.product_id')
        ->where('cart.user_id','=',$userid)
        ->leftJoin('gallery','gallery.product_id','=','cart.product_id')
        ->where('gallery.type','=','typemain')
        ->select('cart.*','cart.id as c_id','product.*','product.id as p_id','gallery.url')
        ->get();
		return view('client.pages.index',['temp_products' => $temp_products,'design_products'=>$design_products,'value_products'=>$value_products,'cart'=>$cart]);
	}
	public function add()
	{

			$company = Company::orderBy('name','ASC')->get();
			return view('admin.pages.add-product',['company' => $company]);



	}

	public function view_product()
	{
		if (\Request::is('admin/*')||\Request::is('writer/*'))
		{


			$temp_products = Product::leftJoin('gallery', 'product.id', '=', 'gallery.product_id')->where('gallery.type','=','typemain')
			->select('product.*','gallery.id as gid','gallery.url','gallery.type')
			->get();
			return view('admin.pages.product_list',['temp_products' => $temp_products]);
		}
	
		else {
			$temp_products =  Product::leftJoin('gallery', 'product.id', '=', 'gallery.product_id')->where('gallery.type','=','typemain')->leftJoin('company','product.company_id','=','company.id')->select('product.*','gallery.url','company.name as c_name')->orderBy('product.created_at','DESC')->paginate(12);
			return view('client.pages.shop',['temp_products' => $temp_products]);
		}

	}

	public function view_product_dtl($id)
	{


		$product_rst = Product::leftJoin('company','product.company_id','=','company.id')
		->where('product.id','=', $id)
		->select('product.*','company.name as c_name')->first();


		/*$gallery1=Gallery::where('product_id',$id)->where('type','type1')->orderBy('id')->get();
		$gallery2=Gallery::where('product_id',$id)->where('type','type2')->orderBy('id')->get();*/
		$temp_products = Product::orderBy('created_at','DESC')->limit(6)->get();

		if (\Request::is('admin/*'))
		{
			$product = DB::table('product')->where('id',$id)->get();
			foreach($product as $pro)
			$id1=$pro->id;
			$gallery=DB::table('gallery')->where('product_id',$id1)->orderBy('id')->get();
			return view('admin.pages.product-detail',['product' => $product,'gallery'=>$gallery]);
		}
		else {
			$gallerymain=Gallery::where('product_id','=',$id)->where('type','typemain')->first();
			return view('client.pages.product-details',['temp_product' => $product_rst,'temp_products' => $temp_products,'gallerymain' => $gallerymain]);
		}



	}

	public function view_product_by_category($category)
	{
		if($category=='Others')
		{
		$temp_products =  Product::leftJoin('gallery', 'product.id', '=', 'gallery.product_id')
		->whereNotIn('product.category', ['Necklaces', 'Rings', 'Pendants','Barcelets','Earrings'])
		->where('gallery.type','=','typemain')
		->leftJoin('company','product.company_id','=','company.id')->select('product.*','gallery.url','company.name as c_name')
		->orderBy('product.created_at','DESC')
		->paginate(12);

		}
		else{
		$temp_products =  Product::leftJoin('gallery', 'product.id', '=', 'gallery.product_id')
		->where('product.category','=', $category)
		->where('gallery.type','=','typemain')
		->leftJoin('company','product.company_id','=','company.id')->select('product.*','gallery.url','company.name as c_name')
		->orderBy('product.created_at','DESC')
		->paginate(12);
		}

			return view('client.pages.shop',['temp_products' => $temp_products]);
	}
	public function view_product_by_jewellery($jewellery)
	{
		if($jewellery=='Others')
		{
		$temp_products =  Product::leftJoin('gallery', 'product.id', '=', 'gallery.product_id')
		->whereNotIn('product.jewellery', ['Diamond', 'Ruby', 'Pearl','Jade','Sapphires','Loose Stone'])
		->where('gallery.type','=','typemain')
		->leftJoin('company','product.company_id','=','company.id')->select('product.*','gallery.url','company.name as c_name')
		->orderBy('product.created_at','DESC')
		->paginate(12);

		}
		else{
		$temp_products =  Product::leftJoin('gallery', 'product.id', '=', 'gallery.product_id')
		->where('product.jewellery','=', $jewellery)
		->where('gallery.type','=','typemain')
		->leftJoin('company','product.company_id','=','company.id')->select('product.*','gallery.url','company.name as c_name')
		->orderBy('product.created_at','DESC')
		->paginate(12);
		}

			return view('client.pages.shop',['temp_products' => $temp_products]);
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
