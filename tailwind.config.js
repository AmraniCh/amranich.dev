const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
  content: require('fast-glob').sync([
    'source/**/*.{blade.php,blade.md,md,html,vue,js,css}',
    '!source/**/_tmp/*', // exclude temporary files
    'lang/*' // exclude temporary files
  ], { dot: true }),
  theme: {
    extend: {
      fontFamily: {
        sans: ['Ubuntu', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        // 'black': '#956437',
        // 'brown': '#8A6445',
        // // 'yellow': '#E1C171',
        // 'yellow': {
        //   'primary': '#E1C171',
        //   'light': '#e1c1718f',
        //   'lighter': '#fdf0d259',
        // },
        // 'bone': '#DFD3C1',
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
