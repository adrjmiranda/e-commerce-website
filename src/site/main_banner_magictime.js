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

function animateImage(index) {
	const slides = document.querySelectorAll('.swiper-slide');
	slides.forEach((slide, i) => {
		const imageElement = slide.querySelector('img');
		if (imageElement) {
			imageElement.classList.remove('magictime', 'tinLeftIn');
			if (i === index) {
				void imageElement.offsetWidth;
				imageElement.classList.add('magictime', 'tinLeftIn');
			}
		}
	});
}

swiper.on('activeIndexChange', function () {
	animateText(swiper.activeIndex);
	animateImage(swiper.activeIndex);
});

animateText(swiper.realIndex);
animateImage(swiper.activeIndex);
