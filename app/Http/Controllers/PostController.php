<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate();
        return view('posts.index', compact('posts'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5|max:255',
            'content' => 'required|min:5'
        ]);
        $title = $request->get('title');
        $content = $request->get('content');
        $slug = Str::of($request->string('title'))->slug('-');
        $date = fake()->date();
        $image = fake()->image;
        $user_id = 22;
//        $post1 = compact($title, $content, $slug, $date, $image, $user_id);
        $post = [
            'title' => $title,
            'slug' => $slug,
            'content' =>$content,
            'date' => $date,
            'image' => $image,
            'user_id' => 22

        ];
//        dd($post);

        /**
         * TODO разобраться с этим делом, не сохранияет из-за токена
         */
        Post::create($post);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
