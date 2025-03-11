import defaultTheme from 'tailwindcss/defaultTheme';
import preset from './vendor/filament/support/tailwind.config.preset'
const Unfonts = require("unplugin-fonts");

/** @type {import('tailwindcss').Config} */
export default {
    presets: [preset],
     content: [ 
        "./resources//*.blade.php", 
        "./resources//.js", 
        "./resources/**/.vue", 
    ], 
    theme: { 
        extend: {
             fontFamily: { excon: ['Excon', 'Black'], 
                excon: ['Excon', 'Bold'], 
                ranade: ['Ranade', 'Bold'], 
            }, 
        }, 
    }, plugins: [], 
};