/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{php,html,js}"],
  safelist: [
    'bg-[url(...)]',
  ],
  

  theme: {
    extend: {},
  },
  plugins: [],
}

