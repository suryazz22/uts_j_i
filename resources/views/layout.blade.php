<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS J_I</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: url('{{ asset('images/bckground.webp') }}') no-repeat center center fixed;
            background-size: cover;
        }
    </style>
</head>
<body>

    @include('navbar')

    <div class="container my-5">
        @yield('content')
    </div>

</body>
</html>
