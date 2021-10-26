<?php

namespace App\Http\Controllers\WebsiteController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Depart;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index($id)
    {
        $departs     = Depart::get();
        $category    = Category::findOrFail($id);
        $collections = Collection::get();
        $products    = Product::where('cat', $id)->paginate(9);
        return view('website/shop', compact('departs', 'products', 'category', 'collections'));
    }

    public function allProducts()
    {
        $departs     = Depart::get();
        $collections = Collection::get();
        $products    = Product::paginate(9);
        return view('website/shop', compact('departs', 'products', 'collections'));

    }
}
