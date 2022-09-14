const mix = require("laravel-mix");

// mix.js("resources/js/app.js", "public/js").css(
//     "resources/css/app.css",
//     "public/css"
// );

mix.js("resources/js/app.js", "public/js")
    .js("resources/js/script.js", "public/js/script.js")
    .js("resources/js/dataGrid.js", "public/js/dataGrid.js")
    .postCss("resources/css/app.css", "public/css", [require("tailwindcss")]);
