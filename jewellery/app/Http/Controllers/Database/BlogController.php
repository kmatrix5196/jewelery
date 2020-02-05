<?php

namespace App\Http\Controllers\Database;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
	 * Create a new blog instance.
	 *
	 * @param  Request  $request
	 * @return Response
	 */

    public function view_blog()
	{		
		if (\Request::is('admin/*'))
		{
			$temp_blogs = Blog::orderBy('id','ASC')->paginate(12);
			return view('admin.pages.blog_list',['temp_blogs' => $temp_blogs]);
		}
		else { 
			$temp_blogs = Blog::orderBy('created_at','DESC')->paginate(12);
			return view('client.pages.shop',['temp_blogs' => $temp_blogs]);
		}
		
	}
    public function add_blog(Request $request)
	{
		// Validate the request...

		$blog = new Blog;
		
		$blog->title = $request->b_title;
		$blog->subtitle = $request->b_subtitle;
		$blog->description = $request->b_dscrp;
		$blog->date = date('Y-m-d', strtotime($request->b_date));
		$blog->paragraph = $request->b_paragraph;
	//	$blog->admin_id = 1;
	//	$blog->writer_id = 1;

		
		
		$blog->save();
		// if ($blog->save()) {
		// if ($request->file('b_img') == null) {
		// 	$file = "";
		// }
		// else{
		// 	$imageName = strval($blog->id).'.'.$request->file('b_img')->getClientOriginalExtension();
		// 	$request->file('b_img')->move(public_path('/img/blog'), $imageName);
		// };
		// 	return redirect('/admin/blog/view/'.$blog->id);
		
		// }

		return redirect()->route('view_blog');
	}

	public function edit_blog($id)
	{
		// Validate the request...

		$blog_rst = Blog::where('id', '=', $id)->first();
		return view('admin.pages.edit_blog',['temp_blog' => $blog_rst]);
	}

	public function update_blog(Request $request)
	{
		// Validate the request...
		$blog = Blog::where('id','=', $request->b_id)->first();
		echo $blog;
		$blog->title = $request->b_title;
		$blog->subtitle = $request->b_subtitle;
		$blog->description = $request->b_dscrp;
		$blog->date = date('Y-m-d', strtotime($request->b_date));
		$blog->paragraph = $request->b_paragraph;
		$blog->save();
		return redirect()->route('view_blog');
	}

	public function delete_blog($id)
	{
		// Validate the request...

		Blog::where('id', '=', $id)->delete();
		return redirect()->route('view_blog');
	}
}
