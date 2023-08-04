<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        // Get all posts from the "post" table
        $posts = Post::all();

        // Pass the posts to the view
        return view('posts', compact('posts'));
    }
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('show', ['post' => $post]);
    }
    public function getPostsByCategory($category)
    {
        if ($category === 'all') {
            $posts = Post::all();
        } else {
            $posts = Post::where('post_category', $category)->get();
        }
        return response()->json($posts);
    }



    public function showPostsPage()
    {
        // Fetch the categories and all posts data here
        $categories = Category::all();
        $allPosts = Post::all();

        // Get the selected category (if any) from the query string
        $selectedCategory = request()->query('category');

        // Filter posts by category
        $posts = ($selectedCategory && $selectedCategory !== 'all')
            ? Post::where('post_category', $selectedCategory)->get()
            : $allPosts;

        // Pass the categories and filtered posts data to the view
        return view('posts', compact('categories', 'posts', 'selectedCategory'));
    }


      public function searchPosts(Request $request)
    {
        $searchTerm = $request->input('search');
    
        // Use a query to search the post_title column for the search term
        $posts = Post::where('post_title', 'LIKE', '%' . $searchTerm . '%')->get();
    
        // Fetch the categories and all posts data here
        $categories = Category::all();
        $allPosts = Post::all();
    
        // Get the selected category (if any) from the query string
        $selectedCategory = request()->query('category');
    
        // Filter posts by category (similar to showPostsPage() method)
        $posts = ($selectedCategory && $selectedCategory !== 'all')
            ? $posts->where('post_category', $selectedCategory)
            : $posts;
    
        // Pass the categories, filtered posts data, and selected category to the view
        return view('posts', compact('categories', 'posts', 'selectedCategory'));
    }
    
}
