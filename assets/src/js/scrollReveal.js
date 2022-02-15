import ScrollReveal from 'scrollreveal';

const $scrollReveals = $('.scroll-reveal');

$scrollReveals.each(function() {
    const $scrollReveal = $(this);
    const delay = $scrollReveal.attr('data-sr-delay') || 0;
    ScrollReveal().reveal(this, {delay, distance: '50px', duration: 600, easing: 'cubic-bezier(0.5, 1, 0.89, 1)'});
});