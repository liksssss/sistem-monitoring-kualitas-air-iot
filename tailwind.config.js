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
            // Tambahkan font kustom di sini
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },

            // Tambahkan warna kustom
            colors: {
                primary: '#1E40AF', // Biru gelap
                secondary: '#F97316', // Oranye terang
                success: '#22C55E', // Hijau untuk status sukses
                danger: '#EF4444', // Merah untuk status error
            },

            // Tambahkan ukuran spasi
            spacing: {
                '72': '18rem',
                '84': '21rem',
                '96': '24rem',
                '128': '32rem',
            },

            // Tambahkan radius kustom
            borderRadius: {
                xl: '1.25rem',
                '2xl': '1.5rem',
            },

            // Tambahkan animasi kustom
            animation: {
                wiggle: 'wiggle 1s ease-in-out infinite',
            },

            // Tambahkan keyframes untuk animasi kustom
            keyframes: {
                wiggle: {
                    '0%, 100%': { transform: 'rotate(-3deg)' },
                    '50%': { transform: 'rotate(3deg)' },
                },
            },
        },
    },

    plugins: [forms],
};
