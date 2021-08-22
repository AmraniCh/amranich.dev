const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
  purge: [
    "source/**/*.blade.php",
    "source/**/*.md", 
    "source/**/*.html",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Ubuntu', ...defaultTheme.fontFamily.sans],
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
