@extends('layouts.main')
@section('title', 'shopping-cart_title')
@section('meta_description', 'contact_description')
@section('content')
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shopping Cart</h4>
                        <div class="breadcrumb__links">
                            <a href="{{route('index')}}">Home</a>
                            <a href="{{route('products')}}">Products</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                            <tr>
                                <th>Product</th>
                                <th>Details</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody id="product-list"></tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart__total">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Total <span id="total"></span></li>
                        </ul>
                        <a href="{{route('checkout')}}" class="checkout-btn primary-btn">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
@section('javascript')
    <script>
        function setCart() {
            $('#product-list').html('');
            let cart = sessionStorage.getItem('cart');
            cart = cart?JSON.parse(cart):[];
            let total = 0;
            let count = 0;
            for(let key in cart){
                const item = cart[key];
                total += item.product.price * parseInt(item.count);
                count ++;
                const href = `<a href="/products/product/${item.product.id}">select</a>`;
                $('#product-list').append(`<tr>
                                <td class="product__cart__item">
                                    <a href="/products/product/${item.product.id}">
                                        <div class="product__cart__item__pic">
                                            <img src="/img/products/${item.product.media_folder}/${item.product.preview}" alt="">
                                        </div>
                                    </a>
                                </td>
                                <td class="product__cart__item">
                                    <div class="product__cart__item__text">
                                        <h6>${item.product.name}</h6>
                                        <h5>$ ${item.product.price}</h5>
                                        <span>size: ${item.size?item.size:href}</span><br/>
                                        <span>color: ${item.color?item.color:href}</span><br/>
                                        <span>count: ${item.count}</span>
                                    </div>
                                </td>
                                <td class="cart__price">$ ${item.product.price * parseInt(item.count)}</td>
                                <td class="cart__close"><i class="fa fa-close" onclick="remove(${item.product.id})"></i></td>
                            </tr>`)
            }
            if (total !== 0) {
                $('.checkout-btn').show();
            } else {
                $('.checkout-btn').hide();
            }
            $('.countInCart').html(count);
            $('.priceInCart').html('$'+total);
            $('#total').html('$ '+total);
        }
        setCart();
        function remove(id) {
            let cart = sessionStorage.getItem('cart');
            cart = cart?JSON.parse(cart):[];
            cart = cart.filter(item => item.product.id !== id);
            sessionStorage.setItem('cart', JSON.stringify(cart));
            setCart();
        }
    </script>
@stop
