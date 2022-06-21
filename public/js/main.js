'use strict';

(function ($) {

    /*------------------
        Background Set
    --------------------*/
    $('.set-bg').each(function () {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });

    //Search Switch
    $('.search-switch').on('click', function () {
        $('.search-model').fadeIn(400);
    });

    $('.search-close-switch').on('click', function () {
        $('.search-model').fadeOut(400, function () {
            $('#search-input').val('');
        });
    });

    /*------------------
		Navigation
	--------------------*/
    $(".mobile-menu").slicknav({
        prependTo: '#mobile-menu-wrap',
        allowParentLinks: true
    });

    //Canvas Menu
    $(".canvas__open").on('click', function () {
        $(".offcanvas-menu-wrapper").addClass("active");
        $(".offcanvas-menu-overlay").addClass("active");
    });

    $(".offcanvas-menu-overlay").on('click', function () {
        $(".offcanvas-menu-wrapper").removeClass("active");
        $(".offcanvas-menu-overlay").removeClass("active");
    });

    /*-----------------------
        Hero Slider
    ------------------------*/
    $(".hero__slider").owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        dots: false,
        nav: true,
        navText: ["<span class='arrow_left'><span/>", "<span class='arrow_right'><span/>"],
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: false
    });

    /*-------------------
		Radio Btn
	--------------------- */
    $(".shop__sidebar__size label, .product__details__option__size label").on('click', function () {
        $(".shop__sidebar__size label, .product__details__option__size label").removeClass('active');
        $(this).addClass('active');
    });
    $(".product__details__option__color label").on('click', function () {
        $(".product__details__option__color label").removeClass('active');
        $(this).addClass('active');
    });


    /*------------------
        CountDown
    --------------------*/
    // For demo preview start
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();

    if(mm == 12) {
        mm = '01';
        yyyy = yyyy + 1;
    } else {
        mm = parseInt(mm) + 1;
        mm = String(mm).padStart(2, '0');
    }
    var timerdate = mm + '/' + dd + '/' + yyyy;

    $("#countdown").countdown(timerdate, function (event) {
        $(this).html(event.strftime("<div class='cd-item'><span>%D</span> <p>Days</p> </div>" + "<div class='cd-item'><span>%H</span> <p>Hours</p> </div>" + "<div class='cd-item'><span>%M</span> <p>Minutes</p> </div>" + "<div class='cd-item'><span>%S</span> <p>Seconds</p> </div>"));
    });

    let triggersModal = document.querySelectorAll(".js-show-modal");
    let modals = document.querySelectorAll(".js-modal");

    function closeModal() {
        modals.forEach((modal) => {
            if (modal.classList.contains("is-open")) {
                modal.classList.remove("is-open");
            }
        });
    }

    triggersModal.forEach((button) =>
        button.addEventListener("click", function (e) {
            e.preventDefault();
            let modalID = this.dataset.modal;
            modals.forEach(function (modal) {
                if (modal.dataset.modal == modalID) {
                    modal.classList.add("is-open");
                }
            });
        })
    );

    modals.forEach((modal) => {
        modal.addEventListener("click", function (event) {
            const isOutside = !event.target.closest(".modal__inner");
            const isCloseButton = event.target.matches(".js-close-modal");
            if (isCloseButton || isOutside) {
                closeModal();
            }
        });
    });

    window.addEventListener("keydown", (event) => {
        if (event.key === "Escape") {
            closeModal();
        }
    });

    const cart = sessionStorage.getItem('cart');
    setInfoForCart(cart?JSON.parse(cart):[]);
})(jQuery);

function setInfoForCart(cart) {
    let countInCart = 0;
    let priceInCart = 0;
    for(let key in cart) {
        const item = cart[key];
        countInCart ++;
        priceInCart += item.product.price * parseInt(item.count);
    }
    $('.countInCart').html(countInCart);
    $('.priceInCart').html('$'+priceInCart+'.00');
}
