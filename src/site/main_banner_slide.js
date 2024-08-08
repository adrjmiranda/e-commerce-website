import Swiper from 'swiper';
import { Autoplay, Pagination, EffectFade } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/effect-fade';

const swiper = new Swiper('.swiper', {
	modules: [Pagination, Autoplay, EffectFade],
	direction: 'horizontal',
	loop: true,
	effect: 'fade',

	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	},

	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
});

export default swiper;
