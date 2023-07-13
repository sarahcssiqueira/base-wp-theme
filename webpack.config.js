/**
 * Webpack configuration.
 */

const path = require('path');
const MiniCssExtractPlugin = require( "mini-css-extract-plugin" );

const JS_DIR = path.resolve(__dirname, '/src/js' );
const BUILD_DIR = path.resolve(__dirname, 'build');

const entry = {
    main : JS_DIR + '/index.js'
};

const output = {
    path: BUILD_DIR,
    filename: 'js/[name].js'
};

const rules = [
    {
        test: /\.js$/,
		include: [JS_DIR],
		exclude: /node_modules/,
		use: "babel-loader",
    },
    {
		test: /\.scss$/,
		exclude: /node_modules/,
		use: [MiniCssExtractPlugin.loader, "css-loader", "sass-loader"],
	},
];

module.exports = (env, argv) => ({
    entry: entry,
    output: output,
    devtool: 'source-map',

    module: {
        rules: rules,
    }

});