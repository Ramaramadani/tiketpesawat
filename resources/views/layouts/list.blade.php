<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product List</title>
</head>
<body>
    @include('components.header')

    <div class="container">
        @yield('content')
    </div>

    @include('components.footer')
</body>
</html>
