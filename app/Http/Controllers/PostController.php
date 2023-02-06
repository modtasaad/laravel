<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        //select * from posts;
        $allPosts = Post::all();

        return view('posts.index',[
            'posts' => $allPosts,
        ]);
    }

    public function create()
    {
        $users = User::get();
        // dd($users);
        return view('posts.create',[
            'users' => $users,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $title = $data['title'];
        $description = $data['description'];
        $userId = $data['Post_Creator'];
        Post::create([
            'title' => $title,
            'description' => $description,
            'user_id' => $userId,
        ]);

        return to_route('posts.index');
    }

     public function edit($postId)
    {
        $post = Post::find($postId);
        $users = User::get();
        return view('posts.edit', compact('post'),['users' => $users,]);  
    }

    public function update(Request $request, $postId)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
        ]); 
        $post = post::find($postId);
        $post->title =  $request->get('title');
        $post->description = $request->get('description');
        $post->save();
 
        return redirect('/posts')->with('success', ' postes updated.');
    }
   
    public function show($postId)
    {
        $post = Post::find($postId);
        // dd($post);
        return view('posts.show',[ 'post' => $post,]);
    }


    public function destroy($postId)
    {
        // $post = Post::where('id', $postId)->get()->restore();
        $post = post::find($postId);
        $post->delete(); 
 
        return redirect('/posts')->with('success', 'post removed.'); 
    } 
}


   




   


