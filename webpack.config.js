const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
  plugins: [new MiniCssExtractPlugin()],
  mode:'development',
  entry: './src/index.js',
  output: {
    filename: 'main.js',
    path: path.resolve(__dirname, 'dist'),
  },
  devtool: 'inline-source-map',
  module:{
    rules:[
      {
        test: /\.css$/i,
        use: [MiniCssExtractPlugin.loader,'css-loader','postcss-loader']
      }
    ]
  }
};