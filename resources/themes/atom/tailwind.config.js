const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["poppins", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'primary': '#2a2a2a', /* Siyah */
                'secondary': '#49d85a', /* Yeşil */
                'tertiary': '#01baff', /* Mavi */
                'quarternary': '#ffe000', /* Sarı */
                'quinary': '#d84949' /* Kırmızı */
            },
        },
    },

    variants: {
        extend: {
            opacity: ["disabled"],
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
