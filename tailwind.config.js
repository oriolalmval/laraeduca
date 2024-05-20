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
                'cornflower-blue': {
                    '50': '#eff6ff',
                    '100': '#dbebfe',
                    '200': '#bfdbfe',
                    '300': '#93c2fd',
                    '400': '#60a5fa',
                    '500': '#3b8ff6',
                    '600': '#257eeb',
                    '700': '#1d71d8',
                    '800': '#1e5faf',
                    '900': '#1e4e8a',
                    '950': '#173254',
                },
            },
        },
    },

    plugins: [forms],
};
