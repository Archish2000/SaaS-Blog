<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Tag;

class WelcomeController extends Controller
{
    public function index()
    {
     /*   $search=request()->query('search');

        if($search)
        {
            $posts=Post::where('title','LIKE',"%{$search}%")->simplePaginate(2);

        }
        else{
            $posts = Post::paginate(2);
        }*/
        return view('welcome')
        ->with('categories',Category::all())
        ->with('posts',Post::searched()->simplePaginate(2))
        ->with('tags',Tag::all());

    }
}
