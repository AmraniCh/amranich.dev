const defaultTheme = require("tailwindcss/defaultTheme");
const plugin = require('tailwindcss/plugin')

module.exports = {
	content: require("fast-glob").sync(
		[
			"source/**/*.blade.php",
			"source/**/*.js",
			"source/**/*.css",
		],
		{ dot: true }
	),
	theme: {
		extend: {
			fontFamily: {
				sans: ["Ubuntu", ...defaultTheme.fontFamily.sans],
			},
			colors: {
				transparent: "transparent",
				yellow: {
					50: "#FFFDF7",
					100: "#F7EED9",
					200: "#f5ead1",
					300: "#ead59e",
					400: "#e1c171",
					500: "#D1B161",
					600: "#C0A152",
					700: "#B09142",
					800: "#A08032",
					900: "#8F7023",
					950: "#7F6013",
				},
				brown: {
					200: "#f9f6f3",
					300: "#f1ece3",
					400: "#dfd3c1",
					500: "#cfbca2",
				},
				gray: {
					50: "#f6f6f6",
					100: "#e7e7e7",
					200: "#d1d1d1",
					300: "#b0b0b0",
					400: "#888888",
					500: "#6d6d6d",
					600: "#5d5d5d",
					700: "#4f4f4f",
					800: "#454545",
					900: "#3d3d3d",
				},
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
			flexGrow: {
				1: "1",
				2: "2",
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
