@extends('layouts.main')
@section('title', 'checkout_title')
@section('meta_description', 'checkout_description')
@section('content')
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Check Out</h4>
                        <div class="breadcrumb__links">
                            <a href="{{route('index')}}">Home</a>
                            <a href="{{route('products')}}">Products</a>
                            <span>Check Out</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form method="POST" name="checkoutForm">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <h6 class="checkout__title">Billing Details</h6>
                            <div class="checkout__input">
                                <p>Name<span>*</span></p>
                                <input name="name" type="text" required>
                            </div>
                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input name="address" type="text" required>
                            </div>
                            <div class="checkout__input">
                                <p>Postcode / ZIP<span>*</span></p>
                                <input name="zip" type="text" required>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input name="phone" type="text" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input name="email" type="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Order notes</p>
                                <input name="notes" type="text" placeholder="Notes about your order, e.g. special notes for delivery.">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4 class="order__title">Your order</h4>
                                <div class="checkout__order__products">Product <span>Total</span></div>
                                <ul class="checkout__total__products" id="checkout-list"></ul>
                                <ul class="checkout__total__all">
                                    <li>Total <span id="total"></span></li>
                                </ul>
                                <button type="submit" class="site-btn">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@stop
@section('javascript')
    <script>
        function setCheckout() {
            $('#checkout-list').html('');
            let cart = sessionStorage.getItem('cart');
            cart = cart?JSON.parse(cart):[];
            let total = 0;
            for(let key in cart){
                const item = cart[key];
                total += item.product.price * parseInt(item.count);
                $('#checkout-list').append(`<li>${parseInt(key)+1}. ${item.product.name} <span>$ ${item.product.price * parseInt(item.count)}</span></li>`)
            }
            $('#total').html('$ '+total)
        }
        setCheckout();
    </script>
@stop
