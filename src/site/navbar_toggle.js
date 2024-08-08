import $ from 'jquery';

let state = true;
let intervalId = null;

$('#navbar_toggle').on('click', function () {
	if (state) {
		$('.navbar_menu').removeClass('hidden');
		$('.navbar_menu').addClass('flex');

		$('#navbar_toggle .navbar_show_icon').removeClass('flex');
		$('#navbar_toggle .navbar_show_icon').addClass('hidden');

		$('#navbar_toggle .navbar_hidden_icon').removeClass('hidden');
		$('#navbar_toggle .navbar_hidden_icon').addClass('flex');

		if (!intervalId) {
			intervalId = setInterval(function () {
				$('#navbar_toggle .navbar_hidden_icon')
					.removeClass('magictime puffIn')
					.offset();
				$('#navbar_toggle .navbar_hidden_icon').addClass('magictime puffIn');
			}, 1000);
		}
	} else {
		$('.navbar_menu').removeClass('flex');
		$('.navbar_menu').addClass('hidden');

		$('#navbar_toggle .navbar_show_icon').removeClass('hidden');
		$('#navbar_toggle .navbar_show_icon').addClass('flex');

		$('#navbar_toggle .navbar_hidden_icon').removeClass('flex');
		$('#navbar_toggle .navbar_hidden_icon').addClass('hidden');

		if (intervalId) {
			clearInterval(intervalId);
			intervalId = null;
		}
	}

	state = !state;
});
