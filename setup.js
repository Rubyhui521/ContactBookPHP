const fs = require('fs')

const appDir = __dirname.substring(__dirname.lastIndexOf('/') + 1)
// console.log(process.env.ROOT_DIRECTORY)

fs.writeFileSync('frontend/vue.config.js', `module.exports = {
  // proxy API requests to Valet during development
  devServer: {
    proxy: 'http://${appDir}.test'
  },

  // output built static files to Laravel's public dir.
  // note the "build" script in package.json needs to be modified as well.
  outputDir: '../public',

  // modify the location of the generated HTML file.
  // make sure to do this only in production.
  indexPath: process.env.NODE_ENV === 'production'
    ? '../resources/views/index.blade.php'
    : 'index.html'
}`)
