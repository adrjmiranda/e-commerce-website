import $ from 'jquery';

let state = true;
let intervalId = null;

$('#navbar_toggle').on('click', function () {
	if (state) {
		$('.navbar_menu').removeClass('hidden');
		$('.navbar_menu').addClass('flex');
	} else {
		$('.navbar_menu').removeClass('flex');
		$('.navbar_menu').addClass('hidden');
	}

	$('#navbar_toggle .navbar_show_icon').toggleClass('hidden flex');
	$('#navbar_toggle .navbar_hidden_icon').toggleClass('hidden flex');

	if (state && !intervalId) {
		intervalId = setInterval(function () {
			$('#navbar_toggle .navbar_hidden_icon')
				.removeClass('magictime puffIn')
				.offset();
			$('#navbar_toggle .navbar_hidden_icon').addClass('magictime puffIn');
		}, 1000);
	} else if (!state && intervalId) {
		clearInterval(intervalId);
		intervalId = null;
	}

	state = !state;
});
