/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./project_mkk/**/*.{html,js,php}"
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('daisyui'),
  ],
}

