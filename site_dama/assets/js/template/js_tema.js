/*
exibe e esconde o menu fixo qd o user da scrool
*/

$(".whatsapp").hide();

$(document).ready(function () {

    //compartamento do menu
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        // se não é, trata o top-bar
        if (scroll >= 250) {
            $(".whatsapp").fadeIn('slow');

        } else {
            $(".whatsapp").fadeOut('slow');
        }
    });

    //smooth scrool
    $(".smooth").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {
                window.location.hash = hash;
            });
        }
    });

    //owl antes e depois
    $('.antes-depois').owlCarousel({
        loop: true,
        nav: true,
        animateOut: 'fadeOut',
        items: 1,
        navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"]
    });
});

// scrool reveal
ScrollReveal().reveal('.slideup', {
    distance: '30%',
    origin: 'bottom',
    opacity: 0,
    duration: 2500
});

ScrollReveal().reveal('.sliderigth', {
    distance: '30%',
    origin: 'left',
    opacity: 0,
    duration: 1500
});

ScrollReveal().reveal('.d-5', { delay: 500 });
ScrollReveal().reveal('.d-8', { delay: 800 });
ScrollReveal().reveal('.d-11', { delay: 1100 });
ScrollReveal().reveal('.d-14', { delay: 1400 });
ScrollReveal().reveal('.d-17', { delay: 1700 });

// fecha colapse bootstrap
$('.navbar-nav>li>a').on('click', function () {
    $('.navbar-collapse').collapse('hide');
});

// feedback formulários - inicio
var ambiente = window.location.host;

$local = 'http://localhost/dama';
$homolog = 'http://pipeline-digital.com.br/homolog/dama';
$prod = 'https://planodesaudesegurar.com.br';

var base_url = '';
switch (ambiente) {

    case 'localhost':
        base_url = $local;
        break;

    case 'pipeline-digital.com.br':
        base_url = $homolog;
        break;

    case 'planodesaudesegurar.com.br':
        base_url = $prod;
        break;
}

/*
    em prod dispara a function se o emeil foi enviado
    local e homolog dispara no click, independentemente se enviou ou nao
*/
var evento = '';
if (ambiente == $prod) {
    evento = 'wpcf7mailsent';
} else {
    evento = 'wpcf7submit';
}

// feedback
var wpcf7Elm = document.querySelector('.wpcf7');
if (wpcf7Elm) {
    console.log(evento);
    wpcf7Elm.addEventListener(evento, function (event) {
        window.location.replace(base_url + "/contato/");
    }, false);
}

// feedback formulários - fim