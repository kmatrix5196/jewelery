<?php

namespace App\Http\Controllers\Database;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Blog_Image;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

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
				$temp_blogs = Blog::leftJoin('blog_image','blog_image.blog_id', '=', 'blog.blog_id')->orderBy('blog.date','ASC')->offset(1)->paginate(12);
			$cur_time = Carbon::now();
			$near_blog = Blog::leftJoin('blog_image','blog_image.blog_id', '=', 'blog.blog_id')->whereDate('date', '>=', $cur_time)->orderBy('blog.date','ASC')->offset(0)->limit(1)->paginate(12);
			
			return view('admin.pages.blog_list',['temp_blogs' => $temp_blogs]);

		}
		else {
			
				$temp_blogs = Blog::leftJoin('blog_image','blog_image.blog_id', '=', 'blog.blog_id')->orderBy('blog.date','ASC')->get();
				
			$cur_time = Carbon::now();
			//DB::enableQueryLog();

			$near_blog = Blog::leftJoin('blog_image','blog_image.blog_id', '=', 'blog.blog_id')->whereDate('date', '>=', $cur_time)->orderBy('blog.date','ASC')->first();
//dd(DB::getQueryLog());
			return view('client.pages.trade_show',['temp_blogs' => $temp_blogs,'near_blog'=>$near_blog]);
		}
	}
	public function view_blog_detail($id)
	{
		if (\Request::is('admin/*'))
		{
		$blog = DB::table('blog')->where('blog_id',$id)->get();
		$blog_images=DB::table('blog_image')->where('blog_id',$id)->get();
			return view('admin.pages.blog_detail',['blog' => $blog,'blog_images'=>$blog_images]);
		}
		else
		{
			$blog = DB::table('blog')->where('blog_id',$id)->get();
		$blog_images=DB::table('blog_image')->where('blog_id',$id)->get();
			return view('client.pages.blog-details',['blog' => $blog,'blog_images'=>$blog_images]);
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
		if ($blog->save()) {
			$blog_img = new Blog_Image;
			$blog_img->blog_id = $blog->id;
			if ($request->file('b_img') == null) {
				$blog_img->url = "img/blog/unavaliable.png";
			}
			else{
				
				$imageName = strval($blog->id).'.'.$request->file('b_img')->getClientOriginalExtension();
				$request->file('b_img')->move(public_path('/img/blog'), $imageName);
				$blog_img->url = "img/blog/".$imageName;
				// $request->file('b_img')->storeAs('blog',$blog->id.".".$request->file('b_img')->getClientOriginalExtension());
				 //
			};
			$blog_img->save();
			return redirect()->route('view_blog');
		};
		// 	return redirect('/admin/blog/view/'.$blog->id);
		
		// }
	}
	public function edit_blog($id)
	{
		// Validate the request...

		$blog_rst = Blog::where('blog_id', '=', $id)->first();
		return view('admin.pages.edit_blog',['temp_blog' => $blog_rst]);
	}

	public function update_blog(Request $request)
	{
		// Validate the request...
		$blog = Blog::where('blog_id','=', $request->b_id)->first();
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

		Blog::where('blog_id', '=', $id)->delete();
		return redirect()->route('view_blog');
	}
}
