import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                cream: {
                    50: '#FBF6EF',
                    100: '#F5E6D3',
                    200: '#EDD5B8',
                    300: '#E0BF98',
                },
                primary: {
                    50: '#FAF5F0',
                    100: '#F0E4D6',
                    200: '#D9C4A8',
                    300: '#C2A68A',
                    400: '#B8956A',
                    500: '#A98B6F',
                    600: '#96775D',
                    700: '#7F644F',
                    800: '#6A5342',
                    900: '#4D3B2F',
                },
                danger: {
                    50: '#FFF2F2',
                    100: '#FFE0E0',
                    400: '#FF6B6B',
                    500: '#FF3737',
                    600: '#E02020',
                    700: '#C41A1A',
                },
                secondary: {
                    50: '#FAF5F0',
                    100: '#F0E4D6',
                    200: '#D9C4A8',
                    300: '#B8956A',
                    400: '#9A7550',
                    500: '#7B542F',
                    600: '#664526',
                    700: '#4D341D',
                },
            },
        },
    },

    plugins: [forms],
};
