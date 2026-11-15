import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'media', // Enable class-based dark mode
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './node_modules/flowbite/**/*.js',
    ],
    theme: {
        extend: {
            fontFamily: {
			'castoro': ['Castoro', 'serif'],
			'outfit': ['Outfit', 'sans-serif'],
			'courgette': ['Courgette', 'cursive'],
            'kaushan': ['Kaushan Script', 'cursive'],
            'overpass': ['Overpass', 'sans-serif'],
            'poppins': ['Poppins', 'sans-serif'],
            'ubuntu': ['Ubuntu', 'sans-serif'],
            'pacifico': ['Pacifico', 'cursive'],
            'merienda': ['Merienda', 'cursive'],
			},
			colors: {
                'custom-dark': '#0E0E10', // Add your custom color here
            },
        },
    },
    plugins: [
	      require('tailwindcss'),
          require('autoprefixer'),
          require('flowbite/plugin')],
};