// Import IE polyfill for Vue
import "babel-polyfill";

// Require utils js
require('./utils');
// Require Vue
window.axios = require('axios');
window.Vue = require('vue');

require('./globals')

Vue.component('posts-loop', require('./components/posts-loop.vue'));
Vue.component('pages-loop', require('./components/pages-loop.vue'));


Barba.Dispatcher.on('transitionCompleted', function(currentStatus, oldStatus, container) {
        var app = new Vue({
            el: '#app'
        });
        wow.init();
        var sync = setInterval(() => {
            wow.sync();
        }, 2000);
        setTimeout(() => {
            clearInterval(sync);
        }, 15000);
        var conteo = 0;

        $('.boton-menu').click(function(){
            setTimeout(() => {
                $('.boton-menu').toggleClass('is-active');
            }, 300)
            if(conteo == 0){
            $('.menu-animado').addClass('menuexpandido');
            setTimeout(() => {
                $('.menu-animado').addClass('border');
            }, 300);
            conteo += 1;
        }else if(conteo == 1){
            $('.menu-animado').removeClass('border');
                setTimeout(() => {
                $('.menu-animado').removeClass('menuexpandido');
            }, 300);
            conteo -= 1;
        }
        });

        window.addEventListener('scroll', function() {

            var scrolledHeight = window.pageYOffset,
            el = document.querySelector('.parallax'),
            topImg = scrolledHeight - el.offsetTop / 100 * 70;
            if(scrolledHeight == 0){
                el.style.top = 0;
            }else{
            el.style.top = '-' + topImg / 100 * 70 + 'px';
            }
        });

    });
