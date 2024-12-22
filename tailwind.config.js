/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        fontFamily: {
            'maven-pro': ['Maven Pro', 'sans-serif'],
        }
    },
  },
  plugins: [],
}

