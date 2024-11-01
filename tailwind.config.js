/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        cmyBlue: {
          100: "#E5F0FF", // W - Background
          500: "#3B82F6", // Main Theme Color
          900: "#1E3A5C", // Main Text Color
        },
        cmySlate: {
          500: "#647A98", // Secondary Text Color
        },
      },
      fontFamily: {
        cmyRaleway: ["Raleway", "sans-serif"],
        cmyPoppins: ["Poppins", "sans-serif"],
      },
    },
  },
  plugins: [],
}