<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="logo.png" type="image/x-icon">

    <!-- # Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Neuton:wght@700&family=Work+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    {{-- Main Style --}}
    <link rel="stylesheet" href="/assets/css/style.css">

    {{-- Plugin CSS --}}
    <link rel="stylesheet" href="/assets/plugins/bootstrap/bootstrap.min.css">
    <title>CreativeBlog</title>
</head>

<body>

    <x-navbar />
    {{ $slot }}
    <x-footer />
    <!-- # JS Plugins -->
    <script src="/assets/plugins/jquery/jquery.min.js"></script>
    <script src="/assets/plugins/bootstrap/bootstrap.min.js"></script>

    <!-- Main Script -->
    <script src="/assets/js/script.js"></script>
</body>

</html>