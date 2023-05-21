const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
 content: require('fast-glob').sync([
    'source/**/*.{blade.php,blade.md,md,html,vue,js}',
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
        'yellow': '#E1C171',
        'bone': '#DFD3C9',
        
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
      flexGrow: {
        1: '1',
        2: '2',
      },
    },
  },
  plugins: [],
  darkMode: 'class',
};
