/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ['./src/styles/**/*.{html,js}'],
	theme: {
		extend: {
			colors: {
				black: '#001110',
				red: '#fb4f3b',
				yellow: '#ffc347',
				blue: '#69d6f4',
				gray: '#d0dddd',
				white: '#fefefe',
			},
			fontFamily: {
				'special-font': ['Lobster', 'sans-serif'],
			},
		},
	},
	plugins: [],
};
