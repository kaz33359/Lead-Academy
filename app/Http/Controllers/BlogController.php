<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\blog;

class BlogController extends Controller
{
    public function add_blog(Request $request)
    {
        $data = new blog();
        $data->author_name = $request->author_name;
        $data->blog_title = $request->blog_title;
        $data->blog_summary = $request->blog_summary;
        $data->posted_date = $request->posted_date;
        $file = $request->file('file');
        $filename = time() . '.' . $file->extension();
        $file->move(public_path('adminBlog_image'), $filename);
        $data->blog_image = $filename;
        $data->blog_content = $request->blog_content;
        $add_blog = $data->save();

        if ($add_blog) {
            return redirect('admin/index')->with('success', 'Blog added successfully');
        } else {
            return back()->with('fail', 'something went wrong');
        }
    }

    public function sb(Request $request, $id)
    {
        $data['blog'] = DB::table('blogs')->where('id', '=', $id)->first();
        return view('user/blogDetails', $data, ['id' => $id]);
    }

    public function delete_blog(Request $request, $id)
    {
        $model = blog::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Blog deleted successfully');
    }

    public function view_adminblog($id)
    {
        $blog = blog::find($id);
        return view('admin/pages/view_adminblog', compact('blog'));
    }

    public function update_blog(Request $request, $id)
    {
        $blog = blog::find($id);
        $blog->author_name = $request->author_name;
        $blog->blog_title = $request->blog_title;
        $blog->blog_summary = $request->blog_summary;
        // $blog->blog_content = $request->blog_content;
        $blog->update();

        return redirect('admin/index')->with('success', 'blog updated successfully');
    }
}