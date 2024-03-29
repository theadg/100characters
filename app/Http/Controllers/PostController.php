<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Exception;
use HeadlessChromium\BrowserFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Spatie\Browsershot\Browsershot;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->paginate(9);
        $postsCount = Post::count();
        return view('post.index', compact('posts', 'postsCount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $post = Post::create($request->validated());

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    // Using Browsershot
    public function save(Request $request)
    {
        try {
            $screenshotPath = storage_path('images/');
            $path = "{$screenshotPath}/screenshot.jpg";
            // Create Directory if Path does not exist
            if (!File::exists($screenshotPath)) {
                File::makeDirectory($screenshotPath, 0755, true);
            }

            $browsershot = new Browsershot("{$request->url}?save", true);
            $browsershot
                ->addChromiumArguments([
                    'no-sandbox',
                ])
                ->device('iPhone 12 Pro')
                ->save($path);

            return response()->download($path);
        } catch (Exception $e) {
            logger($e);
            dd($e->getMessage());
        }
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
    public function update(UpdatePostRequest $request, Post $post)
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
