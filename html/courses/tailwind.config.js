/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['index.html'],
  darkMode: 'class',
  theme: {
    container: {
      center: true,
      padding: '16px',
    },
    extend: {
      colors: {
        primary: '#08baff',
        dark: '#14532d',
        secondary: '#0efff9',
        socmed: '#6ee7b7'
      },
      screens: {
        '2xl': '1320px'
      }
    },
  },
  plugins: [],
}