"use strict";
const webpack           = require("webpack");
const ExtractTextPlugin = require("extract-text-webpack-plugin");
const HtmlWebpackPlugin = require("html-webpack-plugin");
const path              = require("path");

const config = (env) => {
    return {
        entry: {
            frontend: "./resources/assets/app-frontend.js",
            backend: "./resources/assets/app-backend.js"
        },
        output: {
            path: path.resolve(__dirname,'../public/assets/'),
            filename: '[name].js',
            publicPath: 'public/assets/'
        },
        module:{
            rules:[
                {
                    test: /\.css$/,
                    use: ExtractTextPlugin.extract({
                        fallback: "style-loader",
                        use: [
                            "css-loader"
                        ],
                        publicPath: './'
                    })
                },
                {
                    test: /\.(eot|ttf|woff|woff2|otf|svg)$/,
                    loader: 'url-loader',
                    options: {
                        limit: 10000,
                        name: "fonts/[name].[ext]"
                    }
                },
                {
                    test: /\.(jpe?g|png|gif)$/i,
                    loaders: [
                        'file-loader?hash=sha512&digest=hex&name=images/[hash].[ext]',
                        'image-webpack-loader?bypassOnDebug'
                    ]
                },
                {
                    test: /\.scss$/,
                    use: [
                        {
                            loader: "style-loader" // creates style nodes from JS strings
                        },
                        {
                            loader: "css-loader" // translates CSS into CommonJS
                        },
                        {
                            loader: "sass-loader" // compiles Sass to CSS
                        }]
                },
                {
                    test: /\.js$/,
                    exclude: /node_modules/,
                    loader: "babel-loader"
                }
            ]
        },
        plugins: [
            new webpack.ProvidePlugin({
                $: "jquery",
                jQuery: "jquery",
                'window.jQuery': 'jquery',
                'window.$': 'jquery',
                createDayLabel: "jquery",
                createWeekdayLabel: "jquery"

            }),
            new ExtractTextPlugin({
                filename: "[name].css",
                allChunks: true
            }),
            new HtmlWebpackPlugin({
                chunks: ['frontend'],
                filename: "../../resources/views/frontend/core/frontend-layout.blade.php",
                template: "./resources/assets/templates/frontend-layout.ejs",
                inject: false
            }),
            new HtmlWebpackPlugin({
                chunks: ['backend'],
                filename: "../../resources/views/backend/core/backend-layout.blade.php",
                template: "./resources/assets/templates/backend-layout.ejs",
                inject: false
            })
        ]
    }
};

module.exports = config;