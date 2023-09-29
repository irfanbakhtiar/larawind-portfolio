/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container: {
      center: true,
      padding: '16px',
    },
    extend: {
      colors: {
        primary: '#0284c7',
        dark: '#111827',
        secondary: '#6b7280',
      },
      screens: {
        '2xl': '1320px',
      }
    },
  },
  plugins: [
    require('@tailwindcss/line-clamp'),
  ],
}
