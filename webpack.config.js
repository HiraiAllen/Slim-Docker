const path = require('path');

module.exports = {
  entry: './src/index.js', // Archivo de entrada de React
  output: {
    path: path.resolve(__dirname, 'public/js'),
    filename: 'bundle.js', // Archivo de salida de Webpack
  },
  module: {
    rules: [
      {
        test: /\.(js|jsx)$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
        },
      },
    ],
  },
  resolve: {
    extensions: ['.js', '.jsx'],
  },
  mode: 'development',
};