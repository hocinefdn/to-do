const mix = require("laravel-mix");

// mix.js("resources/js/app.js", "public/js").css(
//     "resources/css/app.css",
//     "public/css"
// );

mix.js("resources/js/app.js", "public/js")
    .js("resources/js/components.js", "public/js/components.js")
    .postCss("resources/css/app.css", "public/css", [require("tailwindcss")]);
