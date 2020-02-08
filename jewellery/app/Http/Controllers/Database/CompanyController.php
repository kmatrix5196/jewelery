<?php

namespace App\Http\Controllers\Database;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Support\Facades\Hash;

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
		$company->password=Hash::make($request->password);
		$company->save();
		if ($company->save()) {
			if ($request->file('b_img') == null) {
				$file = "";
			}
			else{
			$company
            ->where('id',$company->max('id'))
            ->update(['profile_pic' => "/img/profile/".strval($company->id).".".$request->file('b_img')->extension()]);

				$imageName = strval($company->id).'.'.$request->file('b_img')->getClientOriginalExtension();
				$request->file('b_img')->move(public_path('/img/company_profile'), $imageName);
				$company->save();
			};
		};
		
		 return redirect('/home');
	}
}
