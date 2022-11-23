<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function categories()
    {
        return view('frontend.categories');
    }

    public function faq()
    {
        return view('frontend.faq');
    }

    public function viewCategoryPost($category_name)
    {
        $category = Category::where('name', $category_name)->where('status', '0')->first();
        if ($category) {
            // $post = Post::where('category_id', $category->id)->where('status', '0')->paginate(1);
            $post = Post::where('category_id', $category->id)->where('status', '0')->orderBy('created_at', 'DESC')->paginate(1);
            return view('frontend.post.index', compact('post', 'category'));
        } else {
            return view('frontend.index');
        }
    }

    public function viewPost(string $category_name, string $post_name)
    {
        $category = Category::where('name', $category_name)->where('status', '0')->first();
        if ($category) {
            $post = Post::where('category_id', $category->id)->where('name', $post_name)->where('status', '0')->first();
            // $latest_posts = Post::where('category_id', $category->id)->where('status', '0')->orderBy('created_at', 'DESC')->get();
            return view('frontend.post.view', compact('post'));
        } else {
            return view('frontend.index');
        }
    }
}
