@extends('layouts.main')
@section('title', 'O nas - Liseys’')
@section('meta_description', 'Liseys’ - nova znamka spodnjega perila. Slovi po kakovosti, mehkobi in izvirnih ročnih detajlih, ki poskrbijo za unikaten videz. Vsak kos je ustvarjen z ljubeznijo, nežnostjo in namenom poudarka vaše ženstvenosti')
@section('content')
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>O nas</h4>
                        <div class="breadcrumb__links">
                            <a href="{{route('index')}}">Domov</a>
                            <span>O nas</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about__pic">
                        <img src="/img/about/about-us.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="about__item">
                        <h4>Kdo smo mi?</h4>
                        <p>
                            Liseys’ premium lingerie – o lepoti, nežnosti in eleganci. Vsi artikli so lastne proizvodnje, zato lahko z zaupanjem zagotavljamo kakovost blaga in kroja, udobje in unikatnost.  Skrbimo za naše stranke, prisluhnemo njihovim željam in vedno opravimo posamezne spremembe izdelkov glede na jih želje. Obstaja tudi priročna priložnost za kombiniranje različnih velikosti zgornjega in spodnjega dela, kar vam omogoča, da poudarite značilnosti figure.
                        </p>
                        <p>
                            Naše spodnje perilo je odlična možnost, da pokažete ljubezen do sebe in jo oddate skozi spodnje perilo. Ali pa naredite darilo za ljubljeno osebo. Vedno z veseljem za vas izdelamo poseben paket in podpišemo kartico z besedami, ki so za vas pomembne.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
