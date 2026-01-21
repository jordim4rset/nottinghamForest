<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notthingam Forest @yield('title')</title>
    <link rel="stylesheet" href="/css/styles.css">

</head>
<body>
    @include('layout.partials.nav')

    @yield('content')

    @include('layout.partials.footer')
</body>
</html>
