<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jersey</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #00aeff6e;
        }
        .header {
            background: linear-gradient(to right, #2c3e50, #3498db); /* Gradient background */
            color: #ffffff;
            padding: 2rem 0;
        }
        .footer {
            background: #2c3e50;
            color: #ffffff;
            padding: 1.5rem 0;
        }
    </style>
</head>
<body>

    <div class="header text-center">
        <h1>Jersey<strong>store</strong></h1>
    </div>

    <div class="container mt-4">
        @yield('content')
    </div>

    <div class="footer text-center">
        &copy; 2023 Jersey Store
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
</body>
</html>
