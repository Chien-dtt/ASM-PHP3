<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    // public function index()
    // {
    //     $products = DB::table('products')->get();
    //     return view('products.index', compact('products'));
    // }

    public function show($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        return view('products.show', compact('product'));
    }


    public function index()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('products.index', compact('categories', 'products'));
    }

    public function filterByCategory($id)
    {
        $categories = Category::all();
        $products = Product::where('category_id', $id)->get();
        return view('products.index', compact('categories', 'products'));
    }
    // Hiển thị sản phẩm theo danh mục
    public function showCategory($id)
    {
        $category = Category::find($id);
        if (!$category) {
            abort(404);  // Nếu danh mục không tồn tại, trả về lỗi 404
        }

        $products = $category->products;  // Lấy tất cả sản phẩm của danh mục
        return view('products.category', compact('category', 'products'));
    }
}
