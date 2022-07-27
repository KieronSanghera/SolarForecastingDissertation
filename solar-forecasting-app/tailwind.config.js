const colors = require('tailwindcss/colors');

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
      transparent: 'transparent',
      current: 'currentColor',
      neutral: {
        100: '#f5f5f5',
        200: '#e5e5e5',
        400: '#a3a3a3'
      },
      gray: {
        500: '#6b7280'
      },
      zinc: {
        600: '#52525b'
      },
    },},
    
  },
  plugins: [],
}
