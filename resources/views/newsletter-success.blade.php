@extends('layouts.main')
@section('title', 'You have successfully subscribed to the newsletter - Liseys’')
@section('meta_description', '')
@section('content')
    <section class="blog-hero spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-9 text-center">
                    <div class="blog__hero__text">
                        <h2>You have successfully subscribed to the newsletter</h2>
                        <div class="continue__btn">
                            <a href="{{route('index')}}" class="js-close-modal">Domov</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
