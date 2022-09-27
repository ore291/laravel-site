const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './Modules/**/resources/views/**/*.blade.php',
        './resources/js/components/**/*.vue'
        
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Rubik', 'Montserrat', 'Poppins', 'Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {

                secBg: '#59147f',
                secText: '#ffcf26',
                oldsecBg: '#266992',
                okdsecText: '#87CEFA',
               
              }
        },
        
    },

    plugins: [require('@tailwindcss/forms')],
};
