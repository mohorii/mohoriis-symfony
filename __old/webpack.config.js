const path = require('path')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')

module.exports = {
    entry: './project/src/js/index.js',
    output: {
        filename: 'index.min.js',
        path: path.resolve(__dirname, './project/dist')
    },
    mode: 'none',
    watchOptions: {
        aggregateTimeout: 300,
        ignored: '**/node_modules',
    },
    module: {
        rules: [
            {
                test: /\.(png|jpe?g|webp|tiff?)$/i,
                exclude: /node_modules/,
                type: "asset/resource",
                use: [
                    "image-webpack-loader",
                    {
                        loader: "webpack-image-resize-loader",
                        options: {
                            width: 999,
                        }
                    }
                ],
                enforce: 'pre',
                generator: {
                    filename: 'img/[name][ext]'
                }
            },
            {
                test: /\.(gif|ico|webmanifest)$/i,
                exclude: /node_modules/,
                type: "asset/resource",
                generator: {
                    filename: 'img/[name][ext]'
                }
            },
            {
                test: /\.scss$/,
                exclude: /node_modules/,
                type: "asset/resource",
                use: [MiniCssExtractPlugin.loader, "css-loader", "sass-loader"],
            }
        ]
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: "[name].min.css"
        }),
    ],
}