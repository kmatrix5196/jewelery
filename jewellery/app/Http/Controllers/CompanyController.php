<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Conversation;
use App\Models\Company;
use App\Models\Product;
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
        $company_id = auth()->user()->id;
        $company = Company::where('id', '=', $company_id)->first();
        $products =  Product::leftJoin('gallery', 'product.id', '=', 'gallery.product_id')
      	->where('product.company_id', '=', $company_id)
      	->where('gallery.type', '=', 'typemain')->select('product.*', 'gallery.url')
      	->orderBy('product.created_at','DESC')
      	->paginate(12);
        return view('company.pages.company_profile', ['company' => $company, 'products' => $products]);
    }
    public function chat(Request $request)
    {
        $conv_rst = Conversation::where([['reciever_id', $request->u_id],['type', 'company']])->get();
        return view('client.pages.chat',['temp_convs' => $conv_rst]);
    }
}
