const path = require("path");

module.exports = {
  mode: "development",
  entry: "./assets/src/js/main.js",
  output: {
    filename: "build/js/app.js",
    path: path.resolve(__dirname, "assets"),
  },
};
