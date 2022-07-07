@extends('layouts.main')
@section('title', 'Kontakt - Liseys’')
@section('meta_description', '')
@section('content')
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Kontakt</h4>
                        <div class="breadcrumb__links">
                            <a href="{{route('index')}}">Domov</a>
                            <span>Kontakt</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__text">
                        <div class="section-title">
                            <span>Informacije</span>
                            <h2>Kontaktiraj nas</h2>
                            <p>V primeru kakršnih koli vprašanj nas lahko kontaktirate</p>
                        </div>
                        <ul>
                            <li>
                                <h4>Slovenija</h4>
                                <p>Dunajska cesta 129, 1000 Ljubljana <br />info@liseys.si</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form">
                        <form method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name" name="name" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" placeholder="Email" name="email" required>
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Message" name="message" required></textarea>
                                    <button type="submit" class="site-btn">Pošlji sporočilo</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
