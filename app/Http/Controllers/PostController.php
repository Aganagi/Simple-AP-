<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return response()->json($posts);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image',
        ]);
        $file = $request->file('image')->store('posts');
        $post = Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $file
        ]);
        return response()->json(['message' => 'Post created successfully','post'=>$post]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return response()->json($post);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'sometimes|image',
        ]);
        $data = [
            'title' => $request->title,
            'description' => $request->description,
        ];
        if ($request->hasFile('image')) {
            if($post->image){
                Storage::delete('posts/' . $post->image);
            }
            $file = $request->file('image')->store('posts');
            $data['image'] = $file;
        }
        $post->update($data);
        return response()->json(['message' => 'Post updated successfully','post'=>$post]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if (Storage::delete('posts/' . $post->image)) {
            $post->delete();
            return response()->json(['message' => 'Post deleted successfully','post'=>$post]);
        }
    }
}
