const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
  purge: [
    "source/**/*.blade.php",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Ubuntu', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        'black': '#444444',
        'brown': '#8A6445',
        'bg': '#E1C171',
      },
      backgroundImage: theme => ({
        'glass': "url('/assets/images/glass-bg.png')"
      }),
      backgroundSize: {
        'fit': '100% 100%',
      },
      letterSpacing: {
        'widest-x2': '.25em',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
