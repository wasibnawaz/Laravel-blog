<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);
        return view('dashboard.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('dashboard.posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Handle image upload
        $imageName = time() . '-' . uniqid() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        // Save post details to database
        Post::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imageName,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    public function show(Post $post)
    {
        return view('dashboard.posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('dashboard.posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            // Delete old image if exists
            $this->deleteImageIfExists($post->image);

            // Upload new image
            $imageName = time() . '-' . uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);

            // Update image field in database
            $post->image = $imageName;
        }

        // Update other post details
        $post->name = $request->name;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        // Delete associated image file
        $this->deleteImageIfExists($post->image);

        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }

    private function deleteImageIfExists($imageName)
    {
        $imagePath = public_path('images') . '/' . $imageName;

        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
    }
}
