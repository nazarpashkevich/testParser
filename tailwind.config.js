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
                'black-blue': '#14191f',
                'light-blue': '#5D94BD',
                'button-blue': '#28313d',
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
}
