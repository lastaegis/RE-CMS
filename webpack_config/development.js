"use strict";
const webpack           = require("webpack");
const ExtractTextPlugin = require("extract-text-webpack-plugin");
const HtmlWebpackPlugin = require("html-webpack-plugin");
const path              = require("path");

const config = (env) => {
    return {
        entry: {
            main: "./resources/assets/app.js"
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
            new webpack.optimize.CommonsChunkPlugin({
                name: 'vendor',
                minChunks: function (module) {
                    return module.context && module.context.indexOf("resources/assets/plugins") !== -1;
                }
            }),
            new ExtractTextPlugin({
                filename: "[name].css",
                allChunks: true
            }),
            new HtmlWebpackPlugin({
                chunks: ['vendor','main'],
                filename: "../../resources/views/core/header.blade.php",
                template: "./resources/assets/templates/header.ejs",
                inject: false
            }),
            new HtmlWebpackPlugin({
                chunks: ['vendor','main'],
                filename: "../../resources/views/core/footer.blade.php",
                template: "./resources/assets/templates/footer.ejs",
                inject: false
            })
        ]
    }
};

module.exports = config;