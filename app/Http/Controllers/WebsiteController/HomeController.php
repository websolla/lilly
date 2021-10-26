<?php

namespace App\Http\Controllers\WebsiteController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Sliders;
use App\Models\Category;
use App\Models\Product;
use App\Models\Blogs;

class HomeController extends Controller
{
    public function index()
    {
        $sliders    = Sliders::get();
        $categories = Category::orderBy('sort', 'ASC')->where('featured', '!=', '0')->take(4)->get();
        $products   = Product::orderby('created_at', 'ASC')->take(9)->get();
        $blogs      = Blogs::orderby('created_at', 'ASC')->take(3)->get();
        return view('website/index', compact('sliders', 'categories', 'products', 'blogs'));
    }

    public function product_pop($id)
    {
        $product = Product::findOrFail($id);
        return view('website/modal', compact('product'));

    }
}
