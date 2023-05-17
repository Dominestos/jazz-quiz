<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @vite (['resources/css/app.css', 'resources/js/app.js'])

  <title>Domusic-v</title>

</head>
<body class="text-light" style="background-image: url('/storage/img/background/louis.jpg'); background-size: cover; background-position: center; background-attachment: fixed">
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')
</body>
</html>