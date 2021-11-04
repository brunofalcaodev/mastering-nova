const colors = require('tailwindcss/colors')
const heropatterns = require("tailwindcss-hero-patterns/src/patterns")
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports =
{
    "purge": [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue"
    ],
    "theme": {
        heroPatterns: {
          topography: heropatterns.circuitboard,
        },
        "colors": {
            "primary-950": "#24383F",
            "primary-990": "#141e22",
            'primary': {  DEFAULT: '#7BA6B4',  '50': '#FFFFFF',  '100': '#FDFEFE',  '200': '#DDE8EB',  '300': '#BCD2D9',  '400': '#9CBCC6',  '500': '#7BA6B4',  '600': '#5B90A1',  '700': '#497380',  '800': '#365660',  '900': '#24383F'},
            'secondary': {  DEFAULT: '#E87F4D',  '50': '#FDF4F0',  '100': '#FBE7DE',  '200': '#F6CDB9',  '300': '#F1B395',  '400': '#ED9971',  '500': '#E87F4D',  '600': '#E25F20',  '700': '#B74B18',  '800': '#8A3912',  '900': '#5D260C'},
            "background": colors.coolGray,
            "gray": colors.coolGray,
            "black": colors.black,
            "white": "#FFFFFF"
        },
        "extend": {
            "fontFamily": {
                "primary": ["Nunito Sans", ...defaultTheme.fontFamily.sans],
                "logo": ["Zen Dots", "cursive" , ...defaultTheme.fontFamily.sans]
            },
            "maxWidth": {
                "1/3": "33%",
                "1/2": "50%",
                "1/4": "25%"
            },
            "minWidth": {
                "1/3": "33%",
                "1/2": "50%",
                "1/4": "25%"
            }
        }
    },
    "variants": {
        "extend": {}
    },
    "plugins": [
        require('tailwindcss-hero-patterns')
    ]
}