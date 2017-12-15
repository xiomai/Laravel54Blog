<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function show()
    {
        return view('blog.create');
    }

    public function all()
    {
        $current_user_id = auth()->user()->id;
        $blogs = Blog::where('user_id', $current_user_id)->get();

        return view('blog.list', compact('blogs'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);

        $blog = new Blog;
        $blog->title = $request['title'];
        $blog->content = $request['content'];
        $blog->user_id = auth()->user()->id;
        $blog->save();

        return redirect('/blogs')->with('success', 'Blog successfully created');
    }

    public function showBlogById($blog_id)
    {
        $blog = Blog::find($blog_id);

        if (!$blog)
        {
            return 'Blog ID Not Found!';
        }

        return view('pages.blog', compact('blog'));
    }

    public function editBlog($blog_id)
    {
        $blog = Blog::find($blog_id);

        if (!$blog)
        {
            return 'Blog ID Not Found!';
        }

        if (auth()->user()->id != $blog->user_id)
        {
            return 'You are not authorized to update this blog.';
        }

        return view('blog.edit', compact('blog'));
    }

    public function updateBlog(Request $request, $blog_id)
    {
        
        $blog = Blog::find($blog_id);

        if (!$blog)
        {
            return 'Blog ID Not Found!';
        }

        if (auth()->user()->id != $blog->user_id)
        {
            return 'You are not authorized to update this blog.';
        }

        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);

        $blog->title = $request['title'];
        $blog->content = $request['content'];
        $blog->save();

        return redirect( url('/blog/'. $blog->id) );
    }
}
