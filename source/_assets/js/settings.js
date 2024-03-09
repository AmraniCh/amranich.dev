export default {
	animations: {
		hideOnScrollY: 60,

		heroBackgroundSvg: {
			desktop: {
				numEachSvg: 6, // Number of duplicate SVGs
				maxDelaySeconds: 10, // Maximum animation delay in seconds
				verticalRanges: [ // Ranges for vertical positioning
					[15, 32],
					[65, 85],
				],
				horizontalRanges: [[10, 90]], // Ranges for horizontal positioning
			},
			mobile: {
				numEachSvg: 4,
				maxDelaySeconds: 4,
				verticalRanges: [
					[5, 28],
					[88, 95],
				],
				horizontalRanges: [[5, 95]],
			},
			mobileBreakpoint: 1024,
		},
	},

	githubRepos: {
		pinnedRepos: [
			"lazzard/php-ftp-client",
			"amranich/github-code-font-changer",
			"amranich/ftp-filemanager",
			"amranich/vanilla-filemanager",
			"amranich/ajax-router",
			"amranich/how-jQuery-works",
		],
		packagistRepos: ["lazzard/php-ftp-client", "amranich/ajax-router"],
		cacheExpireHours: 8,
		skeletonTimeoutSeconds: 2,
	},
};
