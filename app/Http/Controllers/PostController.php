<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Author;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('category')->get();
        $posts = Post::with('author')->get();
        return view('backend/post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $categories = Category::all(); 
       $authors = Author::all();
       return view('backend/post.create', compact('categories','authors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $validate= $request->validate([
            'name'=>'string|max:40',
            'image'=>'required|mimes:jpeg,jpeg,png|max:10000',
            'category' => 'required|integer',
            'author' => 'required|integer',

        ]);
        $imageName=time().'.'.$request->image->extension();
        $request->image->move(public_path('images'),$imageName);
        $file= Post::create([
              'heading' => $request['heading'],
                'description' => $request['description'],
                'category' => $request['category'],
                'author' =>$request['author'],
                'image'=>$imageName,
                'category_id'=>$request->category,
                'author_id' =>$request->author,
        ]);
        return redirect()->route('post.index');
        }
 /*        Post::create([
        'heading' => $request['heading'],
        'description' => $request['description'],
       'category' => $request['category'],
           'image' => $request['image'],

         ]);

            return redirect()->route('post.index');*/
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::find($id);
        $categories = Category::all();
        return view('backend/post.edit',compact('posts','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'),$imageName);
        }
        else{
            $imageName = Post::where('id',$id)->value('image');
        }

        Post::whereId($id)->update([
        'heading' => $request['heading'],
        'description' => $request['description'],
      
        'category_id'=>$request->category,
        'image' => $imageName,
         ]);

            return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts= Post::find($id);
        $posts->delete();
             
        return redirect()->route('post.index');
    }
}
