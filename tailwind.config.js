/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                workSans: ['"Work Sans"', "sans-serif"],
                montserrat: ['"Montserrat"', "sans-serif"],
            },
            color: {
                blackish: "#222222",
            },
            backgroundColor: {
                lightBlue: "#B1E5F3",
            },
        },
    },
    plugins: [],
};
