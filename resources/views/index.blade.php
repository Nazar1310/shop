@extends('layouts.main')
@section('title', 'Domov - Liseys’')
@section('meta_description', '')
@section('content')
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="/img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Liseys’</h6>
                                <h2>Nova kolekcija Spodnjega Perila</h2>
                                <a href="{{route('products')}}" class="primary-btn">Nakupuj zdele <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="/img/hero/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Liseys’</h6>
                                <h2>Nova kolekcija Spodnjega Perila</h2>
                                <a href="{{route('products')}}" class="primary-btn">Nakupuj zdele <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.banner')
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">Najbolj prodajane izdelki</li>
                    </ul>
                </div>
            </div>
            <div class="row product__filter">
                @foreach($products as $item)
                    <div class="col-lg-3 col-6 mix products">
                        @include('layouts.product-item',['product'=>$item])
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                <a href="{{route('products')}}" class="primary-btn">oglej več izdelkov <span class="arrow_right"></span></a>
            </div>
        </div>
    </section>
    @if($product)
        <section class="categories spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="categories__text"></div>
                    </div>
                    <div class="col-lg-4">
                        <div class="categories__hot__deal">
                            <img src="/img/products/{{$product->media_folder}}/{{$product->preview}}" alt="">
                            <div class="hot__deal__sticker">
                                <span>razprodaja</span>
                                <h5>€{{$product->price}}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-1">
                        <div class="categories__deal__countdown">
                            <span>Ugodni nakup</span>
                            <h2>{{$product->name}}</h2>
                            <div class="categories__deal__countdown__timer" id="countdown">
                                <div class="cd-item">
                                    <span>3</span>
                                    <p>Days</p>
                                </div>
                                <div class="cd-item">
                                    <span>1</span>
                                    <p>Hours</p>
                                </div>
                                <div class="cd-item">
                                    <span>50</span>
                                    <p>Minutes</p>
                                </div>
                                <div class="cd-item">
                                    <span>18</span>
                                    <p>Seconds</p>
                                </div>
                            </div>
                            <a href="{{route('product',$product->id)}}" class="primary-btn">kupi zdaj</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="instagram__pic">
                        <div class="instagram__pic__item set-bg" data-setbg="/img/instagram/instagram-1.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="/img/instagram/instagram-2.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="/img/instagram/instagram-3.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="/img/instagram/instagram-4.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="/img/instagram/instagram-5.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="/img/instagram/instagram-6.jpg"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
