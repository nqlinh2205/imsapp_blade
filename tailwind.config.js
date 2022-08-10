const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.js",
        "./resources/js/**/*.jsx",
    ],

    theme: {
        container: {
            center: true,
        },
        extend: {
            fontFamily: {
                'sans': "'Open Sans', sans-serif",
                montserrat: "'Montserrat', sans-serif",
                roboto: "'Roboto', sans-serif",
                sarabun:"'Sarabun', sans-serif",
                'body': ['"Arial"', ...defaultTheme.fontFamily.sans],
                'times' : 'Times New Roman',
                'silom' : 'Silom',
            },
            screens: {
                xl: "1200px",
            },
        },
        screens: {
            'xs': '475px', ...defaultTheme.screens,
        },
    },

    plugins: [
       
    ],
    variants: {
        scrollbar: ['rounded'],
    }
};
