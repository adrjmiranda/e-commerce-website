import 'magic.css/dist/magic.css';
import swiper from './main_banner_slide.js';

function animateText(index) {
	const slides = document.querySelectorAll('.swiper-slide');
	slides.forEach((slide, i) => {
		const textElement = slide.querySelector('.slide-text');
		if (textElement) {
			textElement.classList.remove('magictime', 'puffIn');
			if (i === index) {
				void textElement.offsetWidth;
				textElement.classList.add('magictime', 'puffIn');
			}
		}
	});
}

swiper.on('activeIndexChange', function () {
	animateText(swiper.activeIndex);
});

animateText(swiper.realIndex);
