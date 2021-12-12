module.exports = {
  darkMode: "class",
  content: [
    "app/**/*.{html,php}",
    "./assets/js/*.{js}",
    "./views/*.{html,php}",
    "./views/component/*.{html,php}",
  ],
  theme: {
    extend: {},
  },
  plugins: [
    // ...
    require("tailwindcss"),
    require("autoprefixer"),
    // ...
  ],
};
