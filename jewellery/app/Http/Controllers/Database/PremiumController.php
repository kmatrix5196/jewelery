<?php

namespace App\Http\Controllers\Database;

use App\Http\Controllers\Controller;
use App\Models\Premium;
use DB;
use Illuminate\Http\Request;

class PremiumController extends Controller
{
    //
        public function add_premium(Request $request)
	{
		// Validate the request...
		$company_name = $request->company_name;
		$company_id = DB::table('company')->where('name',$company_name)->value('id');
		
		$premium = new Premium;
		$premium->name=$request->name;
		$premium->price=$request->price;
		$premium->description=$request->dscrp;
		$premium->additional_information=$request->info;
		$premium->instock=$request->instock;
		$premium->company_id=$company_id;
		$premium->product_code=$request->code;
		$premium->save();
		if ($premium->save()) {
			if ($request->file('b_img') == null) {
				$file = "";
			}
			else{
			$premium
            ->where('id',$premium->max('id'))
            ->update(['photo' => "/img/premium/".strval($premium->id).".".$request->file('b_img')->getClientOriginalExtension()]);

				$imageName = strval($premium->id).'.'.$request->file('b_img')->getClientOriginalExtension();
				$request->file('b_img')->move(public_path('/img/premium'), $imageName);
				$premium->save();
			};
		};
		
		 return redirect('/admin/premium/add');
	}
	  public function view_premium()
	{		
		
			$premium = DB::table('premium')->get();
			return view('admin.pages.premium_lists',['premium' => $premium]);
		
	
	}
	 public function view_premium_c()
	{		
		
			$premium = DB::table('premium')->select('id','photo')->get();
			return view('client.pages.premium_show',['premium' => $premium]);
		
	
	}
	
	public function premium_detail($id)
	{		
		
			$premium = DB::table('premium')->where('id',$id)->get();
			return view('admin.pages.premium-detail',['premium' => $premium]);
		
	
	}
	public function edit_premium($id)
	{		
		
			$premium = DB::table('premium')->where('id',$id)->get();
			return view('admin.pages.edit_premium',['premium' => $premium]);
	}
	public function update_premium(Request $request)
	{
		$premium = new Premium;
		DB::table('premium')
            ->where('id', $request->id)
            ->update(['name' => $request->name,'price'=>$request->price,'description'=>$request->dscrp,'additional_information'=>$request->info,'instock'=>$request->instock,'company_id'=>1,'product_code'=>$request->code]);
         if ($request->file('b_img') == null) {
				$file = "";
			}
			else{
			$premium
            ->where('id',$request->id)
            ->update(['photo' => "/img/premium/".strval($request->id).".".$request->file('b_img')->getClientOriginalExtension()]);

				$imageName = strval($request->id).'.'.$request->file('b_img')->getClientOriginalExtension();
				$request->file('b_img')->move(public_path('/img/premium'), $imageName);
				
			};
            return redirect('/admin/premium/view');
	}
	public function delete_premium($id)
	{
		DB::table('premium')->where('id', '=', $id)->delete();
		    return redirect('/admin/premium/view');
	}
}
