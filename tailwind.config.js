// tailwind.config.js

/** @type {import('tailwindcss').Config} */
export default {
    // This defines where Tailwind looks for classes to generate the CSS
    content: [
        './resources/**/*.blade.php', 
        './resources/**/*.js', 
        './resources/**/*.vue', 
    ],

    theme: {
        extend: {
            // MERGED FONT DEFINITION GOES INSIDE extend
            fontFamily: {
                sans: [
                    'Instrument Sans',
                    'ui-sans-serif',
                    'system-ui',
                    '-apple-system',
                    'BlinkMacSystemFont',
                    'Segoe UI',
                    'Roboto',
                    'Helvetica Neue',
                    'Arial',
                    'Noto Sans',
                    'sans-serif',
                    // Note: You should generally keep 'Apple Color Emoji', 'Segoe UI Emoji', etc.
                    // out of the main 'sans' list and define them separately or rely on 'sans-serif'
                    // but since you had them in your CSS variable, I'll stick to your core fonts here.
                ],
            },
        },
    },

    // Plugins must be defined for DaisyUI and Forms to work
    plugins: [
        require('@tailwindcss/forms'),
        require('daisyui'), 
    ],

    // DaisyUI Configuration
    daisyui: {
        themes: ["light", "dark", "lofi"], 
    },
};