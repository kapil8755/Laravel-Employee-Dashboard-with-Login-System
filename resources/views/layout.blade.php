<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My App')</title>

    <!-- ✅ Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
    padding-top: 70px;
    height: 100%;
margin: 0;
}

html, body {
    height: 100%;
    margin: 0;
}

/* Flexbox layout for the page */
.wrapper {
    display: flex;
    flex-direction: column; /* Stack content vertically */
    min-height: 100vh; /* Full viewport height */
}

/* Content will expand to fill available space */
.content {
    flex-grow: 1;
}

/* Footer style */
.footer {
    background-color: #343a40;
    color: white;
    text-align: center;
    padding: 15px;
}

.logout-btn {
    background-color: #e3342f;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 6px;
    font-weight: bold;
    transition: background 0.3s;
    display: inline-block;
}

.logout-btn:hover {
    background-color: #cc1f1a;
}

    </style>
</head>
<body>
    <?php echo View::make('navbar'); ?>

     @yield('content');

    <?php echo View::make('footer'); ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>




