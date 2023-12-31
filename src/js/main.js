$(document).ready(function () {
    $('.header__link-category, .header__button-category').click(function() {
        $('.header__menu-nav').removeClass('open-primary');
        $('.header__cat-nav').toggleClass('open-category');
    });

    $('.header__button-category-close').click(function() {
        $('.header__cat-nav').removeClass('open-category');
    });

    $('.header__button-primary').click(function() {
        $('.header__cat-nav').removeClass('open-category');
        $('.header__menu-nav').addClass('open-primary');
    });

    $('.header__button-primary-close').click(function() {
        $('.header__menu-nav').removeClass('open-primary');
    });

         	/* ---------------------------------------------------
		Back to Top
	-------------------------------------------------- */
    $(".footer__back").addClass("hidden-top");
    $(window).scroll(function () {
    if ($(this).scrollTop() === 0) {
        $(".footer__back").addClass("hidden-top")
    } else {
        $(".footer__back").removeClass("hidden-top")
    }
});

$('.footer__back').on("click", function () {
    $('body,html').animate({scrollTop:0}, 1200);
    return false;
});


$('.header__minicart-link').click(function() {
    $('.woocommerce-mini-cart').toggleClass('open-minicart');
});

$('.sidebar__sub-category a').click(function() {
    $('.sidebar__sub-menu').toggleClass('open-sidebar-category');

});


});
