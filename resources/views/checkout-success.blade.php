@extends('layouts.main')
@section('title', 'checkout_title')
@section('meta_description', 'checkout_description')
@section('content')
    <section class="blog-hero spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-9 text-center">
                    <div class="blog__hero__text">
                        <h2>You have successfully placed an order</h2>
                        <div class="continue__btn">
                            <a href="{{route('index')}}" class="js-close-modal">Continue Shopping</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
@section('javascript')
    <script>
        sessionStorage.setItem('cart', JSON.stringify([]));
        setInfoForCart([]);
    </script>
@stop
