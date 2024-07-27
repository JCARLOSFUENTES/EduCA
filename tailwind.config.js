/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
  theme: {
    extend: {
        backgroundColor: theme => ({
            ...theme('colors'),
            'primary': '#5a189a',
            'secondary': '#7b2cbf',
            'terciary': '#9d4edd'
          }),
        borderColor: {
            'primary': '#5a189a',
            'secondary': '#7b2cbf',
            'terciary': '#9d4edd'
          },
        textColor: {
            'primary': '#5a189a',
            'secondary': '#7b2cbf',
            'terciary': '#9d4edd'
        },
        borderColor: {
            'primary': '#5a189a',
            'secondary': '#7b2cbf',
            'terciary': '#9d4edd'
          },
        ringColor: {
            'primary': '#5a189a',
            'secondary': '#7b2cbf',
            'terciary': '#9d4edd'
        },
        fontFamily: {
            'montserrat': ['Montserrat', 'sans-serif']
          }
    },
  },
  plugins: [],
}

