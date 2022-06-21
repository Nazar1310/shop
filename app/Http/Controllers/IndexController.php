<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $product = Product::where('mark','Deal Of The Week')->first();
        $products = Product::inRandomOrder()->limit(8)->get();
        return view('index', compact('products','product'));
    }
    public function about() {
        return view('about');
    }
    public function contact() {
        return view('contact');
    }
    public function checkout() {
        return view('checkout');
    }
    public function checkoutPost(Request $request) {
        return view('checkout-success');
    }
    public function shoppingCart() {
        return view('shopping-cart');
    }
    public function products() {
        $products = Product::paginate(20);
        return view('products', compact('products'));
    }
    public function product(Product $product) {
        $products = Product::where('id','!=',$product->id)->inRandomOrder()->limit(4)->get();
        return view('product', compact('product','products'));
    }
}
