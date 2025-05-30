/** @see https://stylelint.io/user-guide/rules */
/** @type {import('stylelint').Config} */

export default {
	extends: ['stylelint-config-standard-scss', 'stylelint-config-recess-order'],
	plugins: ['stylelint-order'],
	rules: {
		'media-feature-range-notation': 'prefix',
		'declaration-block-single-line-max-declarations': 1,
		'scss/dollar-variable-pattern': null,
	},
	overrides: [
		{
			files: ['**/*.scss'],
			customSyntax: 'postcss-scss',
		},
	],
};
