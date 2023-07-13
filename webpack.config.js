/**
 * Webpack configuration.
 */

const entry = {
    main : require('path').resolve(__dirname, '/src/js' ) + '/index.js'
};
const output = {
    path: require('path').resolve(__dirname, 'build'),
    filename: 'js/[name].js'
};

module.exports = (env, argv) => ({
    entry: entry,
    output: output,

});