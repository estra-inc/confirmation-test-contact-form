<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FashionablyLate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css')}}">
  <link rel="stylesheet" href="{{ asset('css/common.css')}}">
  @yield('css')
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Inika&display=swap" rel="stylesheet"> -->
</head>
<body>
  <header class="header">
    <h1 class="header__heading">FashionablyLate</h1>
    @yield('link')
  </header>
  @yield('content')
</body>
</html>