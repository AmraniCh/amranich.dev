const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
 content: require('fast-glob').sync([
    'source/**/*.{blade.php,blade.md,md,html,vue}',
    '!source/**/_tmp/*' // exclude temporary files
  ],{ dot: true }),
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
  plugins: [],
};
