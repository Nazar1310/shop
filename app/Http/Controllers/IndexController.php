<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    private $token = "5438166175:AAFpLkaBGbR08K2eIaF2evG8CIuJ0MnQNPE";
    private $ids = ['384118324','417811797','520616792'];
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
    public function contactPost(Request $request) {
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;
        $text = "️Name: $name\nEmail: $email\nMessage: $message";
        foreach ($this->ids as $id){
            $data = [
                'text' => $text,
                'chat_id' => $id
            ];
            file_get_contents("https://api.telegram.org/bot$this->token/sendMessage?" . http_build_query($data) );
        }
        return view('contact-success');
    }
    public function newsletter(Request $request) {
        $text = "Newsletter: $request->email";
        foreach ($this->ids as $id){
            $data = [
                'text' => $text,
                'chat_id' => $id
            ];
            file_get_contents("https://api.telegram.org/bot$this->token/sendMessage?" . http_build_query($data) );
        }
        return view('newsletter-success');
    }
    public function checkout() {
        return view('checkout');
    }
    public function checkoutPost(Request $request) {
        $products = $request->products?json_decode($request->products):[];
        $productsText = '';
        foreach ($products as $key => $product){
            if(isset($product->product)){
                $name = $product->product->name.'('.$product->product->media_folder.')';
                $price = $product->product->price;
            }else{
                $name = '❌';
                $price = '❌';
            }
            $color = isset($product->color)?$product->color:'❌';
            $count = isset($product->count)?$product->count:'❌';
            $size_bottom = isset($product->size->bottom)?$product->size->bottom:'❌';
            $size_bra = isset($product->size->bra)?$product->size->bra:'❌';
            $size_cup = isset($product->size->cup)?$product->size->cup:'❌';
            $productsText .= "

➡️ $name
Колір: $color
Розмір: bottom($size_bottom)bra($size_bra)cup($size_cup)
Ціна: €$price
Кількість: $count";
        }
        $email = $request->email;
        $phone = $request->phone;
        $name = $request->name;
        $lastname = $request->lastname;
        $street = $request->street;
        $number = $request->number;
        $zipcode = $request->zipcode;
        $city = $request->city;
        $notes = $request->notes?'Коментарі до замовлення: '.$request->notes:'';
        $text = "$productsText

👤 $lastname $name
Електронна адреса: $email
Номер телефону: $phone
Місто: $city
Адреса - Вулиця: $street
Номер будинку: $number
Поштовий індекс: $zipcode

$notes";
        foreach ($this->ids as $id){
            $data = [
                'text' => $text,
                'chat_id' => $id
            ];
            file_get_contents("https://api.telegram.org/bot$this->token/sendMessage?" . http_build_query($data) );
        }
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
