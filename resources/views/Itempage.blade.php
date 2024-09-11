<!DOCTYPE html>
<html lang="en">
<head>
    <title>Item Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('items') }}">Items</a>
        <a href="{{ route('pictures') }}">Pictures</a>
    </nav>
    <div class="container">
        <h1>Items</h1>
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Item 1">
                    <div class="card-body">
                        <p class="card-text">Item 1</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Item 2">
                    <div class="card-body">
                        <p class="card-text">Item 2</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Item 3">
                    <div class="card-body">
                        <p class="card-text">Item 3</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
