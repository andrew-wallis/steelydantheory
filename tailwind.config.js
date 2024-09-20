/** @type {import('tailwindcss').Config} */
module.exports = {  
  plugins: [
    require('tailwindcss'),
    require('autoprefixer'),
    require('postcss-nested'),
  ],  
  content: [
    "./index.php",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

