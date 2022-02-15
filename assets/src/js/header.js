import Headroom from 'headroom.js';

const $header = $('.main-header');

const headroom = new Headroom($header.get(0));

headroom.init();
