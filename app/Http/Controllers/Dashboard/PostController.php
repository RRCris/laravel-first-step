<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::find(2);
        if ($post) {
            $post->delete();
        }
        // $post->update(["title" => "new title", "slug" => "new slug"]);

        return response()->json([
            "name" => "Abigail",
            "state" => "CA",
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // $post = Post::create([
        //     "title" => "new title with route",
        //     "slug" => "new slug with route",
        //     "content" => "new content with route",
        //     "category_id" => 1,
        //     "description" => "new description with route",
        //     "posted" => "not",
        //     "image" => "new image with route",
        // ]);

        // return $post;

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
