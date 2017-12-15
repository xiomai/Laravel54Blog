<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function index()
    {
        $blogs = \App\Blog::with('user')->get();
        return view('pages.index')->with(array('pageName' => 'Home', 'blogs' => $blogs));
    }
    
    public function about()
    {
        $data = [
            'pageName' => 'About',
            'otherData' => 100,
            'code_languages' => [
                'PHP', 'HTML', 'CSS', 'JavaScript'
            ]
        ];

        return view('pages.about', compact('data'));
    }

    public function contact()
    {
        $pageName = 'Contact';

        return view('pages.contact', ['pageName' => $pageName]);
    }

}
