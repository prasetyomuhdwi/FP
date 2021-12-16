module.exports = {
  darkMode: "class",
  content: [
    "./app/**/*.{html,php}",
    "./app/controllers/**/*.{html,php}",
    "./assets/js/*.{js}",
    "./views/*.{html,php}",
    "./views/**/*.{html,php}",
    "./views/tamplates/**/*.{html,php}",
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
