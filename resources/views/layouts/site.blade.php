<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @yield('header');
</head>
<body>
    <head>HEADER</head>
    <main>
        @yield('content');
    </main>
    <footer>FOOTER</footer>
    @yield('footer');
</body>
</html>