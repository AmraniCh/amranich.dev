const defaultTheme = require("tailwindcss/defaultTheme");
const plugin = require('tailwindcss/plugin')

module.exports = {
	content: require("fast-glob").sync(
		[
			"source/**/*.blade.php",
			"source/**/*.js",
			"source/**/*.css",
			"models/**/*.php",
			"projects.json"
		],
		{ dot: true }
	),
	theme: {
		extend: {
			fontFamily: {
				sans: ["Urbanist", ...defaultTheme.fontFamily.sans],
				mono: ["Roboto Mono", ...defaultTheme.fontFamily.mono],
			},
			colors: {
				transparent: "transparent",
				dark: "#3d3325",
				yellow: {
					50: "#FFFDF7",
					100: "#F7EED9",
					200: "#f5ead1",
					300: "#ead59e",
					400: "#e1c171",
					500: "#D1B161",
					600: "#C0A152",
					700: "#a3863b",
					800: "#846d30",
					900: "#6a5726",
					950: "#55461e",
				},
				brown: {
					50: '#ebe7e1',
					100: '#e5dfd7',
					200: '#ddd5ca',
					300: '#d4cabd',
					400: '#c9bdad',
					500: '#bbac98',
					600: '#aa977e',
					700: '#927d60',
					800: '#695a45',
					900: '#544837',
					950: '#433a2c',
				}
			},
			backgroundImage: (theme) => ({
				glass: "url('/assets/images/glass-bg.png')",
			}),
			backgroundSize: {
				fit: "100% 100%",
			},
			letterSpacing: {
				"widest-x2": ".25em",
			},
		},
	},
	plugins: [
		plugin(({ matchUtilities, theme }) => {
			matchUtilities(
				{
					"animation-delay": (value) => {
						return {
							"animation-delay": value,
						};
					},
					"animation-duration": (value) => {
						return {
							"animation-duration": value,
						};
					},
				},
				{
					values: theme("transitionDelay"),
				}
			);
		}),
	],
	darkMode: "class",
};
