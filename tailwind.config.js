/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [ "./resources/**/*.blade.php",
            "./resources/**/*.js",
            "./resources/**/*.vue",],
  theme: {
    extend: {
        colors:{
            'amarelo':'#EA9901',
            'cinza': '#3B3B3B',
            'cinza-claro': '#E9E9E9',
        }
    },
  },
  plugins: [],
}

