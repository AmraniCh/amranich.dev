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
      backgroundSize: {
        'fit': '100% 100%',
      },
    },
    backgroundImage: theme => ({
      'glass': "url('/assets/images/glass-bg.png')",
      'me': "url('/assets/images/me.png')"
    }),
    colors: {
      'black': '#444444',
      'brown': '#8A6445',
    },
    letterSpacing: {
      'widest-x2': '.25em',
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
