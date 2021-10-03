<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\updatePostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $users = User::all();
        return view('home', compact('posts', 'users'));
    }
    public function store(StorePostRequest $request)
    {
        Post::create([
            'title' => $request->title,
            'description'  => $request->description,
            'user_id' => auth()->user()->id
        ]);
        session()->flash('success', 'Post Added Successfully');
        return redirect('/');
    }
    public function show(Post $post)
    {
        return view('posts.modals.show', ['post' => $post]);
    }
    public function update(Post $post, updatePostRequest $request)
    {
        if (!$post) {
            session()->flash('fail');
        }
        $post->update([
            'title' => $request->title ?? $post->title,
            'description'  => $request->description ?? $post->description,
            'user_id' => $request->user_id ?? $post->user()->id
        ]);
        session()->flash('update_post');
        return redirect('/');
    }
    public function destroy(Post $post)
    {
        if (!$post) {
            session()->flash('fail');
            return redirect('/');
        }
        $post->delete();
        session()->flash('delete_post');
        return redirect('/');
    }
}
