<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    echo "<script>window.location.href='login.php';</script>";
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - GoDaddy Clone</title>
    <style>
        body { font-family: sans-serif; background: #fff; margin: 0; }
        header { background: #0073e6; color: white; padding: 20px; }
        nav a { color: white; margin-right: 20px; text-decoration: none; }
        .container { padding: 30px; }
    </style>
</head>
<body>
<header>
    <h2>Welcome to Dashboard</h2>
    <nav>
        <a href="#" onclick="redirect('index.php')">Home</a>
        <a href="#" onclick="redirect('logout.php')">Logout</a>
    </nav>
</header>
<div class="container">
    <h3>Your Services</h3>
    <p>Here you will manage domains, hosting and billing.</p>
</div>
<script>
    function redirect(page) {
        window.location.href = page;
    }
</script>
</body>
</html>
