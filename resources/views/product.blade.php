@extends('layouts.main')
@section('title', 'product_title')
@section('meta_description', 'product_description')
@section('content')
    <section class="shop-details">
        <div class="product__details__pic">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__breadcrumb">
                            <a href="{{route('index')}}">Home</a>
                            <a href="{{route('products')}}">Products</a>
                            <span>Product Details</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <ul class="nav nav-tabs" role="tablist">
                            @foreach(explode(',',$product->images) as $key=>$img)
                                <li class="nav-item">
                                    <a class="nav-link {{$key==0?'active':''}}" data-toggle="tab" href="#tabs-{{$key}}" role="tab">
                                        <div class="product__thumb__pic set-bg" data-setbg="/img/products/{{$product->media_folder}}/{{$img}}"></div>
                                    </a>
                                </li>
                            @endforeach
                            @if($product->video)
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" data-toggle="tab" href="#tabs-40" role="tab">--}}
{{--                                        <div class="product__thumb__pic set-bg" data-setbg="/img/shop-details/thumb-4.png">--}}
{{--                                            <i class="fa fa-play"></i>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
                            @endif
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-9">
                        <div class="tab-content">
                            @foreach(explode(',',$product->images) as $key=>$img)
                                <div class="tab-pane {{$key==0?'active':''}}" id="tabs-{{$key}}" role="tabpanel">
                                    <div class="product__details__pic__item">
                                        <img src="/img/products/{{$product->media_folder}}/{{$img}}" alt="">
                                    </div>
                                </div>
                            @endforeach
                            @if($product->video)
{{--                                <div class="tab-pane" id="tabs-40" role="tabpanel">--}}
{{--                                    <div class="product__details__pic__item">--}}
{{--                                        <img src="/img/shop-details/product-big-4.png" alt="">--}}
{{--                                        <a href="/img/products/{{$product->media_folder}}/{{$product->video}}" class="video-popup"><i class="fa fa-play"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product__details__content">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="product__details__text">
                            <h4>{{$product->name}}</h4>
                            <h3>${{$product->price}}</h3>
                            <div class="product__details__option">
                                <div class="product__details__option__size">
                                    <span>Size:</span>
                                    @foreach(explode(',',$product->size) as $size)
                                        <label for="{{$size}}">{{$size}}
                                            <input class="selectSize" type="radio" value="{{$size}}" id="{{$size}}">
                                        </label>
                                    @endforeach
                                </div>
                                <div class="product__details__option__color">
                                    <span>Color:</span>
                                    @foreach(explode(',',$product->color) as $key=>$color)
                                        <label class="{{$color}}" for="sp-{{$key}}">
                                            <input class="selectColor" type="radio" value="{{$color}}" id="sp-{{$key}}">
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                            <div class="product__details__cart__option">
                                <input class="selectCount quantity-input" type="number" value="1">
                                <a class="primary-btn js-show-modal" id="add-to-cart" data-modal="modal-2">add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-5"
                                       role="tab">Description</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-5" role="tabpanel">
                                    <div class="product__details__tab__content">
                                       {{$product->description}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="related spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="related-title">Related Product</h3>
                </div>
            </div>
            <div class="row">
                @foreach($products as $item)
                    <div class="col-lg-3 col-6">
                        @include('layouts.product-item',['product'=>$item])
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@stop
@section('javascript')
    <script>
        $('#add-to-cart').click(function (e){
            e.preventDefault();
            const product = {!! json_encode($product) !!};
            const size = $(".selectSize:checked").val();
            const color = $(".selectColor:checked").val();
            const count = $(".selectCount").val();
            let cart = sessionStorage.getItem('cart');
            cart = cart?JSON.parse(cart):[];
            cart = cart.filter(item => item.product.id !== product.id);
            cart.push({product, size, color, count});
            setInfoForCart(cart);
            sessionStorage.setItem('cart', JSON.stringify(cart));
        })
    </script>
@stop
