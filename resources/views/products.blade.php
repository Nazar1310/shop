@extends('layouts.main')
@section('title', 'Izdelki - Liseys’')
@section('meta_description', 'Liseys’ - nova znamka spodnjega perila. Slovi po kakovosti, mehkobi in izvirnih ročnih detajlih, ki poskrbijo za unikaten videz. Vsak kos je ustvarjen z ljubeznijo, nežnostjo in namenom poudarka vaše ženstvenosti')
@section('content')
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Izdelki</h4>
                        <div class="breadcrumb__links">
                            <a href="{{route('index')}}">Domov</a>
                            <span>Izdelki</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
                                    <p>Najdeno {{$products->total()}} stran {{$products->currentPage()}}/{{$products->lastPage()}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-lg-3 col-6">
                                @include('layouts.product-item',['product'=>$product])
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
