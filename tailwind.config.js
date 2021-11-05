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
            "black": '#000000',
            "white": '#FFFFFF',

            "orange": {
                DEFAULT: '#f57732',
                '400': '#fe9c67',
                '500': '#f57732',
                '600': '#db7b46'
            },

            "blue": {
                DEFAULT: '#4099DE',
                '200': '#AAF1FF',
                '300': '#4A90E2',
                '400': '#2891C4',
                '500': '#4099DE',
                '600': '#4A90E2',
                '800': '#26425F'
            },
            "gray": {
                '100': '#EEf1f4',
                '150': '#dbe6f0',
                DEFAULT: '#56677B',
                '500': '#56677B',
                '600': '#4C5c69',
                '700': '#26425F'
            }
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