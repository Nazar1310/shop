<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="{{route('index')}}"><img src="/img/logo.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="footer__widget">
                    <ul>
                        <li><a href="{{route('shopping-cart')}}">Nakupovalna košarica</a></li>
                        <li><a href="{{route('products')}}">Izdelki</a></li>
                        <li><a href="{{route('contact')}}">Kontaktiraj nas</a></li>
                        <li><a href="{{route('about')}}">O nas</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="footer__widget">
                    <ul>
                        <li><a href="#">Reklamacija</a></li>
                        <li><a href="#">Dostava</a></li>
                        <li><a href="#">Politika zasebnosti in piškoti</a></li>
                        <li><a href="#">Splošni pogoji poslovanja</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__widget">
                    <div class="footer__newslatter">
                        <p>Bodi prvi obveščeni o novih izdelkih, ugodnostih ter promocijah.</p>
                        <form method="POST" action="{{route('newsletter')}}">
                            @csrf
                            <input type="email" name="email" placeholder="Your email" required>
                            <button type="submit"><span class="icon_mail_alt"></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="footer__copyright__text">
                    <p>Copyright ©<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>
