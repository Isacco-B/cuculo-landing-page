/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}", "./public/**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        bgPrimary: "#f0fdfd",
        bgSecondary: "#05cab6",
        textPrimary: "#2074a3",
        textSecondary: "#333333",
      },
      fontFamily: {
        Poppins: ["Poppins", "serif"],
      },
    },
  },
  plugins: [],
};
