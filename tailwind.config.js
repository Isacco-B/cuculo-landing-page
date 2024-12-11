/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}", "./public/**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        bluPastello: "#A3CEF1",
        verdeSalvia: "#A8D5BA",
        gialloCrema: "#FFF3B0",
        grigioTenue: "#E5E5E5",
        coralloChiaro: "#FFB997",
        grigio1: "#4F4F4F",
        grigio2: "#333333",
        bluGrigio: "#6A7A8C",
        bluScuro: "#2A5D87",
        verdeScuro: "#3B7D56",
      },
      fontFamily: {
        Poppins: ["Poppins", "serif"],
      },
    },
  },
  plugins: [],
};

