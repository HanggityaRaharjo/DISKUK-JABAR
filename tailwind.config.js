const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],
    daisyui: {
        themes: [
            {
                mytheme: {
                    primary: "#06b6d4",

                    secondary: "#22c55e",

                    accent: "#b9f42e",

                    neutral: "#302735",

                    "base-100": "#F4F3F7",

                    info: "#97DFF7",

                    success: "#76EAC5",

                    warning: "#F4BF43",

                    error: "#E45E76",
                },
            },
        ],
    },
    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require("@tailwindcss/forms"), require("daisyui")],
};
