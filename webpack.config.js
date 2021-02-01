const path = require('path');

module.exports = {
    entry: {
        setting: './src/setting/main.js',
    },
    output: {
        filename: '[name].app.js',
        path: path.resolve(__dirname, 'assets/js'),
    },
    module: {
        rules: [
            {
                test: /\.css$/i,
                use: ['style-loader', 'css-loader'],
            },
            {
                test: /\.m?js$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader'
                }
            },
        ],
    },
};
