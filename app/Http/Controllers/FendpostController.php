<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Author;
use App\Category;
class FendpostController extends Controller
{
    public function index()
    {
    	$posts = Post::all();
       return view ('welcome', compact('posts'));
    }
    
    public function detail(Post $id)

    {
      $posts = Post::find($id);
      return view('frontend.content',compact('posts'));
      
  		}
}
