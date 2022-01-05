const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                poppins: ['Poppins'],
            },
            spacing: {
                '600': '37.5rem',
              },
            colors: {
                'primary': '#923C1F',
                'secondary': '#5F4F43',
                'extra': '#190A07',
                'text': '#4B5563',
                'bg': '#E4C6B0',
                'offer': '#4B5563',
                'villatoro': '#FBB130',
            },
            spacing:{
                '600': '37.5rem'
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
