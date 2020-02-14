<?php

namespace App\Http\Controllers\Database;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
use App\Models\Writer;

class WriterController extends Controller
{
    
    public function add_writer(Request $request)
	{
		// Validate the request...
		$writer=new Writer;
		$writer->name=$request->name;
		$writer->email=$request->email;
		$writer->password=Hash::make($request->password);
		$writer->save();
		
		 return redirect('/admin/writer/add');
	}
	  public function view_writer()
	{		
		
			$writers = DB::table('writer')->get();
			return view('admin.pages.writer_lists',['writers' => $writers]);
		
	
	}

	public function edit_writer($id)
	{		
		
			$writers = DB::table('writer')->where('id',$id)->get();
			return view('admin.pages.edit_writer',['writers' => $writers]);
	}
	public function update_writer(Request $request)
	{
		
 $psw=Hash::make($request->password);
		
		DB::table('writer')
            ->where('id', $request->id)
            ->update(['name' => $request->name,'email'=>$request->email,'password'=>$psw]);
            return redirect('/admin/writer/view');
	}
	public function delete_writer($id)
	{
		DB::table('writer')->where('id', '=', $id)->delete();
		    return redirect('/admin/writer/view');
	}
}
