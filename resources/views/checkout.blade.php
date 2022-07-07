@extends('layouts.main')
@section('title', 'Check Out - Liseys’')
@section('meta_description', '')
@section('content')
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Check Out</h4>
                        <div class="breadcrumb__links">
                            <a href="{{route('index')}}">Domov</a>
                            <a href="{{route('products')}}">Izdelki</a>
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
                    <input type="hidden" name="products" id="products">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <h6 class="checkout__title">Podatki plačnika</h6>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Електронна адреса<span>*</span></p>
                                        <input name="email" type="email" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Номер телефону<span>*</span></p>
                                        <input name="phone" type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Ім'я<span>*</span></p>
                                        <input name="name" type="text" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Прізвище<span>*</span></p>
                                        <input name="lastname" type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Адреса - Вулиця<span>*</span></p>
                                        <input name="street" type="text" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Номер будинку<span>*</span></p>
                                        <input name="number" type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Поштовий індекс<span>*</span></p>
                                        <input name="zipcode" type="text" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Місто<span>*</span></p>
                                        <input name="city" type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Коментарі до замовлення</p>
                                <input name="notes" type="text" placeholder="Notes about your order, e.g. special notes for delivery.">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4 class="order__title">Vaše naročilo</h4>
                                <div class="checkout__order__products">Izdelek <span>Skupaj</span></div>
                                <ul class="checkout__total__products" id="checkout-list"></ul>
                                <ul class="checkout__total__all">
                                    <li>Skupaj <span id="total"></span></li>
                                </ul>
                                <button type="submit" class="site-btn checkout-btn">Naroči</button>
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
            $('#products').val(cart);
            cart = cart?JSON.parse(cart):[];
            let total = 0;
            for(let key in cart){
                const item = cart[key];
                total += item.product.price * parseInt(item.count);
                $('#checkout-list').append(`<li>${parseInt(key)+1}. ${item.product.name} <span>€ ${item.product.price * parseInt(item.count)}</span></li>`)
            }
            if (total !== 0) {
                $('.checkout-btn').show();
            } else {
                $('.checkout-btn').hide();
            }
            $('#total').html('€ '+total)
        }
        setCheckout();
    </script>
@stop
