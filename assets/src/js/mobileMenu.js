import Mmenu from "mmenu-js";

const $btn = $('#mobile-menu-btn');
const mmenu = new Mmenu('#mobile-menu', {
    navbar: {
        title: 'Main Menu'
    }
}, {
    offCanvas: {
        page: {
            selector: '#site'
        }
    }
});

const api = mmenu.API;
let opened = false;

$btn.click(function() {
    if(opened) {
        api.close();
    } else {
        api.open();
    }
    opened = !opened;
});

