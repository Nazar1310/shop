@extends('layouts.main')
@section('title', 'Uspešno ste oddali naročilo - Liseys’')
@section('meta_description', 'Liseys’ - nova znamka spodnjega perila. Slovi po kakovosti, mehkobi in izvirnih ročnih detajlih, ki poskrbijo za unikaten videz. Vsak kos je ustvarjen z ljubeznijo, nežnostjo in namenom poudarka vaše ženstvenosti')
@section('content')
    <section class="blog-hero spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-9 text-center">
                    <div class="blog__hero__text">
                        <h2>Uspešno ste oddali naročilo</h2>
                        <div class="continue__btn">
                            <a href="{{route('index')}}" class="js-close-modal">Nadaljujte z nakupovanjem</a>
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
