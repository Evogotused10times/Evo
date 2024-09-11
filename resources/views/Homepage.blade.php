<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('items') }}">Items</a>
        <a href="{{ route('pictures') }}">Pictures</a>
    </nav>
    <div class="container">
        <h1>Welcome to the Home Page</h1>
    </div>
</body>
</html>
