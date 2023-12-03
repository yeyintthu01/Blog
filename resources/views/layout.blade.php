<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <link rel="stylesheet" href="/app.css">
</head>
<body>
    <nav>
        <li>Main</li>
        <li>About</li>
        <li>Contact</li>
    </nav>
    @yield('content')

</body>
</html>