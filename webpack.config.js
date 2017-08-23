"use strict";
function buildConfig(env) {
    return require('./webpack_config/' + env + '.js')(env)
}

module.exports = buildConfig;