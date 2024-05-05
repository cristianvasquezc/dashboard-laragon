/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["../*.php"],
  theme: {
    extend: {
      colors: {
        "cvc-1": "#000814",
        "cvc-2": "#FFB703",
        "cvc-3": "#040C18",
        "cvc-4": "#FF9190",
        whatsapp: "#25D366",
        "whatsapp-hover": "#128C7E",
      },
      gridTemplateColumns: {
        cards: "repeat(auto-fit, minmax(115px, 1fr))",
      },
      zIndex: {
        100: "100",
      },
    },
  },
  plugins: [],
};