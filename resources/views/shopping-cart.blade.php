@extends('layouts.main')
@section('title', 'Nakupovalna košarica - Liseys’')
@section('meta_description', '')
@section('content')
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Nakupovalna košarica</h4>
                        <div class="breadcrumb__links">
                            <a href="{{route('index')}}">Domov</a>
                            <a href="{{route('products')}}">Izdelki</a>
                            <span>Nakupovalna košarica</span>
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
                                <th>Izdelek</th>
                                <th>Podrobnosti</th>
                                <th>Skupaj</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody id="product-list"></tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart__total">
                        <h6>Košarica skupaj</h6>
                        <ul>
                            <li>Skupaj <span id="total"></span></li>
                        </ul>
                        <a href="{{route('checkout')}}" class="checkout-btn primary-btn">Nadaljuj z plačilom</a>
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
                                        <span>price: € ${item.product.price}</span><br/>
                                        <span>color: ${item.color?item.color:href}</span><br/>
                                        <span>count: ${item.count}</span><br/>
                                        <span>bottom: ${item.size.bottom?item.size.bottom:href}</span><br/>
                                        <span>bra: ${item.size.bra?item.size.bra:href}</span><br/>
                                        <span>cup: ${item.size.cup?item.size.cup:href}</span>
                                    </div>
                                </td>
                                <td class="cart__price">€ ${item.product.price * parseInt(item.count)}</td>
                                <td class="cart__close"><i class="fa fa-close" onclick="remove(${item.product.id})"></i></td>
                            </tr>`)
            }
            if (total !== 0) {
                $('.checkout-btn').show();
            } else {
                $('.checkout-btn').hide();
            }
            $('.countInCart').html(count);
            $('.priceInCart').html('€'+total);
            $('#total').html('€ '+total);
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
