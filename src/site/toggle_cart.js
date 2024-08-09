import $ from 'jquery';

$('#close_cart').on('click', function () {
	$('#cart').removeClass('magictime slideLeftReturn slideLeft');
	void $('#cart')[0].offsetWidth;
	$('#cart').addClass('magictime slideLeftReturn');
});

$('#cart_icon').on('click', function () {
	$('#cart').removeClass('magictime slideLeftReturn slideLeft');
	void $('#cart')[0].offsetWidth;
	$('#cart').addClass('magictime slideLeft');
});
