/** @type {import('tailwindcss').Config} */
export default {
  content: ['./resources/**/*.blade.php', './resources/**/*.js'],
  theme: {
    extend: {
      colors: {
        'dark-blue': '#201E50',
        'light-blue': '#4D4E7C',
        'pure': '#BA2C73'
      },
      fontFamily: {
        'body': ['"Montserrat"'],
      }
    },
  },
  plugins: [],
}

