/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                black: "#000000",
                navy: "#243c4c",
                "zinc-200": "#e4e4e7",
                "zinc-400": "#a1a1aa",
                brown: "#836f52",
                gold: "#c3ad77",
                navy2: "#164e63",
                zinc: "#fafafa",

                wine: "#771534",
                darkgray: "#3e3e3f",
                lightgray: "#f2f1f1",
                pink: "#b07889",
                yellow: "#eeb13b",
            },
        },
    },
    plugins: [],
};
