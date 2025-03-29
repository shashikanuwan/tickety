import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    safelist: [
        "bg-rose-100", "text-rose-600",
        "bg-red-100", "text-red-600",
        "bg-slate-100", "text-slate-600",
        "bg-green-100", "text-green-600",
        "bg-amber-100", "text-amber-600",
        "bg-purple-100", "text-purple-600",
        "bg-violet-100", "text-violet-600",
        "bg-emerald-100", "text-emerald-600",
        "bg-yellow-100", "text-yellow-600"
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms, typography],
};
