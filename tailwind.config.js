/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        'merahNavbar' : '#BD2B2B',
        'biruFooter'  : '#05045A',
        'biruMuda'    : '#4DBBEB',
        'newBlack'    : '#191919',
        'greenButton' : '#07BC3A',
        'greyBg'      : '#F5F7F8',
        'yellowEdit'  : '#FDE767',
        'navbarNew'   : '#cec1c1'
      },
      fontFamily: {
        'inter': 'Inter',   
      },
    },
  },
  plugins: [
    require('flowbite/plugin'),
  ],
}

