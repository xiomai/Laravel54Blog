<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/{name}/{place}', function ($name, $place) {
    return '<h1>Hello ' .$name.' from '. $place . '</h1>';
    // return view('welcome');
}); */

// Route::get('/', function () {
//     return '<h1> INDEX PAGE </h1>';
// });

// Route::get('/about', function () {
//     return '<h1> ABOUT PAGE </h1>';
// });

// Route::get('/contact', function () {
//     return '<h1> CONTACT PAGE </h1>';
// });

// Route::get('/', function () {

//     return view('pages.index')->with(array('pageName' => 'Home'));
// });

// Route::get('/about', function () {
//     $data = [
//         'pageName' => 'About',
//         'otherData' => 100,
//         'code_languages' => [
//             'PHP', 'HTML', 'CSS', 'JavaScript'
//         ]
//     ];

//     return view('pages.about', compact('data'));
// });

// Route::get('/contact', function () {
//     $pageName = 'Contact';

//     return view('pages.contact', ['pageName' => $pageName]);
// });

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

Route::get('/blog/create', 'BlogController@show');
Route::post('/blog/create', 'BlogController@store');
// Route::get('/blog/{blog_id}', function($blog_id) {
//     $blog = App\Blog::find($blog_id);
    
//     if (!$blog)
//     {
//         return 'Blog ID Not Found!';
//     }

//     return $blog->title;
// });
Route::get('/blog/{blog_id}', 'BlogController@showBlogById');
Route::get('/blog/edit/{blog_id}', 'BlogController@editBlog');
Route::post('/blog/update/{blog_id}', 'BlogController@updateBlog');


Route::get('/blogs', 'BlogController@all');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
