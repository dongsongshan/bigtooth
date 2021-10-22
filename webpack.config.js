const path = require('path');
const webpack = require('webpack'); // 访问内置的插件
const {CleanWebpackPlugin} = require('clean-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const HtmlWebpackPlugin = require('html-webpack-plugin');

module.exports = {
  mode:'development',
  entry: './src/index.js',
  output: {
    filename: 'main.js',
    path: path.resolve(__dirname, 'dist'),
  },
  devtool: 'inline-source-map',
  devServer:{
    static: './dist',
    hot: true,
  },
  module:{
    rules:[
      {
        test: /\.css$/i,
        use: [
          // { loader: "style-loader", options: { insert: "body",} },
          MiniCssExtractPlugin.loader,
          'css-loader','postcss-loader'],
      }
    ]
  },
  plugins: [
    new webpack.ProgressPlugin(),
    new HtmlWebpackPlugin({template:'./src/template.html'}),
    new CleanWebpackPlugin(),
    new MiniCssExtractPlugin({filename:'style.css'}),
  ],
};