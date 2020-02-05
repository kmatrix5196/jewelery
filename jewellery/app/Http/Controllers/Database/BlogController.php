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

		return redirect()->route('add_blog');
	}
}
