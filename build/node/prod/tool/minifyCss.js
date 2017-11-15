const config = require('../config/config.js')
const fs = require('fs')
const cssnano = require('cssnano')
const writeInternal = require('./writeInternal.js')
const showEnd = require('./showEnd.js')

module.exports = _ => {
    const css = fs.readFileSync(config.src + config.minify.css, 'utf8')

    cssnano.process(css).then(result => {
        writeInternal({
            content: result.css,
            type: css,
            callback: callback
        })
    })

    function callback () {
        showEnd('CSS')
    }
}
