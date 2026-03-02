<!DOCTYPE html>
<html>
<head>
    <title>POS Application</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">POS App</a>
        
        <div>
            <a class="nav-link d-inline text-white" href="/">Home</a>
            <a class="nav-link d-inline text-white" href="/sales">Sales</a>
            <a class="nav-link d-inline text-white" href="/category/food-beverage">Products</a>
        </div>
    </div>
</nav>

<!-- Content -->
<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>