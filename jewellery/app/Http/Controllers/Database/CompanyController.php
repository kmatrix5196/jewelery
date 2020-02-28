<?php

namespace App\Http\Controllers\Database;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    public function add_company(Request $request)
	{
		// Validate the request...

		$company = new Company;
		$company->name=$request->name;
		$company->business_type=$request->business;
		$company->year_established=$request->date;
		$company->main_product=$request->product;
		$company->phone=$request->tel;
		$company->email=$request->email;
		$company->location=$request->address;
		$company->lat=$request->lat;
		$company->lng=$request->lng;
		$company->password=Hash::make($request->password);
		$company->save();
		if ($company->save()) {
			if ($request->file('b_img') == null) {
				$file = "";
			}
			else{
			$company
            ->where('id',$company->max('id'))
            ->update(['profile_pic' => "/img/company_profile/".strval($company->id).".".$request->file('b_img')->getClientOriginalExtension()]);

				$imageName = strval($company->id).'.'.$request->file('b_img')->getClientOriginalExtension();
				$request->file('b_img')->move(public_path('/img/company_profile'), $imageName);
				$company->save();
			};
			if ($request->file('b_img1') == null) {
				$file = "";
			}
			else{
			$company
            ->where('id',$company->max('id'))
            ->update(['side_pic1' => "/img/company_profile/s1".strval($company->id).".".$request->file('b_img1')->getClientOriginalExtension()]);

				$imageName = 's1'.strval($company->id).'.'.$request->file('b_img1')->getClientOriginalExtension();
				$request->file('b_img1')->move(public_path('/img/company_profile'), $imageName);
				$company->save();
			};
			if ($request->file('b_img2') == null) {
				$file = "";
			}
			else{
			$company
            ->where('id',$company->max('id'))
            ->update(['profile_pic' => "/img/company_profile/s2".strval($company->id).".".$request->file('b_img2')->getClientOriginalExtension()]);

				$imageName = 's2'.strval($company->id).'.'.$request->file('b_img2')->getClientOriginalExtension();
				$request->file('b_img2')->move(public_path('/img/company_profile'), $imageName);
				$company->save();
			};
		};

		 return redirect('/home');
	}
	  public function view_company()
	{

			$companies = DB::table('company')->get();
			return view('admin.pages.company_lists',['companies' => $companies]);
	}

	  public function view_company_c()
	{
			$companies = DB::table('company')->get();
			return view('client.pages.supplier',['companies' => $companies]);
	}
	public function company_detail($id)
	{

			$company = DB::table('company')->where('id',$id)->get();
			return view('admin.pages.company_detail',['company' => $company]);


	}
  public function company_detail_c($id)
  {
      $company = DB::table('company')->where('id',$id)->first();
      $products =  Product::leftJoin('gallery', 'product.id', '=', 'gallery.product_id')
    	->where('product.company_id', '=', $id)
    	->where('gallery.type', '=', 'typemain')->select('product.*', 'gallery.url')
    	->orderBy('product.created_at','DESC')
    	->paginate(12);
      return view('client.pages.company_profile',['company' => $company, 'products' => $products]);
  }
	public function delete_company($id)
	{
		DB::table('company')->where('id', '=', $id)->delete();
		    return redirect('/admin/company_lists');
	}
}
