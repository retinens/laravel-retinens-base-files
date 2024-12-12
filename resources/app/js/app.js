import * as bootstrap from 'bootstrap'
window.bootstrap = bootstrap

import Swiper from 'swiper';
import {Navigation, Pagination, Autoplay, Parallax, Thumbs, Controller, EffectFade} from 'swiper/modules';
Swiper.use([Navigation, Pagination, Autoplay, Parallax, Thumbs, Controller, EffectFade]);
window.Swiper = Swiper;
import * as toastr from 'toastr';
window.toastr = toastr;

import lozad from 'lozad'
const observer = lozad();
observer.observe();


import AOS from 'aos';
window.AOS = AOS;
AOS.init();
