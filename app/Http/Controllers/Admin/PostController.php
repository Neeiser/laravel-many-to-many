<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Route;
use App\Category;

class PostController extends Controller
{
    protected $validation = [
        'title'             =>  'required|min:10|max:255',
        'creator_name'      =>  'nullable|max:100',
        'description'       =>  'nullable|min:25|max:255',
    ];

    public function index()
    {
        $postsData = Post::all();
        $categoriesData = Category::all();


        return view('admin.posts.index', [
            'postsData'         => $postsData,
            'categoriesData'    => $categoriesData,
        ]);
    }

    
    public function create()
    {

        $categoriesData = Category::all();

        return view ('admin.posts.create', compact('categoriesData'));
    }

    
    public function store(Request $request)
    {

        $request->validate($this->validation);

        $postForm = $request->all();

        $post = new Post();
        $post->fill($postForm);
        $post->save();

        return redirect()->route('admin.posts.index', $post->slug);
    }

    
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    
    public function edit(Post $post)
    {
        $categoriesData = Category::all();

        return view('admin.posts.edit', [
            'post'              => $post,
            'categoriesData'    => $categoriesData,
        ]);
    }

    
    public function update(Request $request, Post $post)
    {

        $request->validate($this->validation);

        $postForm = $request->all();

        $post->update($postForm);

        return redirect()->route('admin.posts.show', $post->id);
    }

    
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.posts.index');
    }
}
