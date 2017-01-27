<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    </head>
    <body>

    <div id="app">
    <ul>
        <li v-for="skill in skills">@{{ skill }}</li>
    </ul>
    </div>

    <script src="/js/axios.js"></script>
    <script src="/js/vue.js"></script>
    <script src="/js/app.js"></script>

    </body>
</html>
