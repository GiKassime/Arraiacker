/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./*.html",
    "./src/**/*.{php,html,js}",
    "./templates/**/*.{php,html,js}",
    "./view/**/*.{php,html,js}",
    "./public/**/*.{php,html,js}",

  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
