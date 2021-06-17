<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="js/app.js" defer></script>
    <!-- Styles -->
    <link href="css/app.css" rel="stylesheet">
    <title>Smiles</title>
</head>
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Smiles &#128578;</a>
        </div>
    </nav>
</header>
<body>
<div id="mute"></div>
<div id="app">
    <app></app>
</div>
</body>
</html>
