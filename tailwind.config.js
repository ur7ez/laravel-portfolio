/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'class',
  content: [
    './storage/framework/views/*.php',
    './resources/**/*.{blade.php,js,jsx,ts,tsx,vue}',
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require("./plugin")
  ],
}
