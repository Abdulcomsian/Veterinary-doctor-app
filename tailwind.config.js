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
                black: "#222222",
                grayish: "#6F6F6F",
            },
            backgroundColor: {
                lightBlue: "#B1E5F3",
            },
        },
    },
    plugins: [],
};
