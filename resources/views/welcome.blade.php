<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Code-Exam</title>
    <script defer src="{{ mix('js/app.js') }}"></script>
    <style>
        #app {
            font-family: Avenir, Helvetica, Arial, sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-align: center;
            color: #2c3e50;
        }
        body {
            padding: 0;
            margin: 0;
        }
        .main-content {
            margin: 10px;
        }
    </style>
</head>

<body>
    <div id="app">
        <navigation-bar></navigation-bar>
        <div class="main-content">
            <router-view>
                <router-view />
        </div>
    </div>
</body>

</html>
