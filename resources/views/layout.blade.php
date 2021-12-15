<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('Happy Books Store')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    @yield('Header')
    <header class="p-3 mb-2 bg-dark text-white">
        <h1 class="text-center">Happy Book Store</h1>
    </header>
    @yield('Content')

    @yield('Footer')
    <footer class="p-3 mb-2 bg-dark text-white ">
        <h6 class="text-center">&#169; Happy Books Store 2021</h6>
    </footer>
</body>
</html>