<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;



class CategoryController extends Controller
{
    
    public function Heart()
    {
        $posts=Post::all();
        return view('posts/CategoriesPublicPost/heart')->with('posts',$posts);
    }

    public function Cancer()
    {
        $posts=Post::all();
        return view('posts/CategoriesPublicPost/cancer')->with('posts',$posts);
    }
    public function Vision()
    {
        $posts=Post::all();
        return view('posts/CategoriesPublicPost/vision')->with('posts',$posts);
    }

    public function Infants()
    {
        $posts=Post::all();
        return view('posts/CategoriesPublicPost/infants')->with('posts',$posts);
    }

    public function others()
    {
        $posts=Post::all();
        return view('posts/CategoriesPublicPost/other')->with('posts',$posts);
    }
}
