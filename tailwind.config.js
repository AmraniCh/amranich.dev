const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
  content: require('fast-glob').sync([
    'source/**/*.{blade.php,blade.md,md,html,vue,js,css}',
    '!source/**/_tmp/*', // exclude temporary files
    'lang/*'
  ], { dot: true }),
  theme: {
    extend: {
      fontFamily: {
        sans: ['Ubuntu', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        'yellow': {
          '100': '#fefaef',
          '200': '#f5ead1',
          '300': '#ead59e',
          '400': '#e1c171',
          '500': '#d8ba74',
          '600': '#cea75f',
          '700': '#c99245',
          '800': '#b27738',
          '900': '#956437',
        },
        'brown': {
          '200': '#f9f6f3',
          '300': '#f1ece3',
          '400': '#dfd3c1',
          '500': '#cfbca2'
        },
        'gray': {
          '50': '#f6f6f6',
          '100': '#e7e7e7',
          '200': '#d1d1d1',
          '300': '#b0b0b0',
          '400': '#888888',
          '500': '#6d6d6d',
          '600': '#5d5d5d',
          '700': '#4f4f4f',
          '800': '#454545',
          '900': '#3d3d3d',
        },
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
