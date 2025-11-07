import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', 'Poppins', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'village-green': {
                    50: '#f2f8f0',
                    100: '#e0eeda',
                    200: '#c2deb7',
                    300: '#9cc98a',
                    400: '#7ab45f',
                    500: '#5a9a3d',
                    600: '#477c31',
                    700: '#3a6329',
                    800: '#304f24',
                    900: '#294221',
                },
                'village-brown': {
                    50: '#f9f6f3',
                    100: '#f0e9e1',
                    200: '#e0d0c0',
                    300: '#ccb095',
                    400: '#b89070',
                    500: '#a97a57',
                    600: '#95664a',
                    700: '#7c533e',
                    800: '#664536',
                    900: '#553a30',
                },
                'village-cream': {
                    50: '#fefdf9',
                    100: '#faf7ed',
                    200: '#f5ecd7',
                    300: '#ecdcb7',
                    400: '#e2c88f',
                    500: '#d7b06a',
                    600: '#c99a4f',
                    700: '#b07e3b',
                    800: '#916733',
                    900: '#77552d',
                },
            },
        },
    },
    plugins: [],
};
