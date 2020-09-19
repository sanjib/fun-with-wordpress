const path = require('path')

module.exports = {
    entry: "./hello-world.src.js",
    mode: "development",
    output: {
        filename: "hello-world.js",
        path: path.resolve(__dirname, "../public/js/")
    },
    module: {
        rules: [
            {
                test: /\.m?js$/,
                exclude: /(node_modules|bower_components)/,
                use: {
                    loader: "babel-loader",
                    options: {
                        presets: [
                            "@babel/preset-env",
                            "@babel/preset-react"
                        ]
                    }
                }
            }
        ]
    }
}