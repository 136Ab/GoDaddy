<?php include("db.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>GoDaddy Clone - Home</title>
    <style>
        body { font-family: Arial; margin: 0; background: #f4f4f4; }
        header { background: #111; color: white; padding: 15px 30px; }
        nav a { color: white; margin: 0 15px; text-decoration: none; }
        .hero { text-align: center; padding: 50px 20px; background: #0096d6; color: white; }
        .hero input { padding: 10px; width: 300px; }
        .hero button { padding: 10px 20px; background: black; color: white; border: none; cursor: pointer; }
        .cards { display: flex; justify-content: space-around; margin: 40px 20px; }
        .card { background: white; padding: 20px; width: 30%; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        footer { background: #222; color: white; text-align: center; padding: 15px; margin-top: 40px; }
    </style>
</head>
<body>
<header>
    <h2>GoDaddy Clone</h2>
    <nav>
        <a href="#" onclick="redirect('index.php')">Home</a>
        <a href="#" onclick="redirect('login.php')">Login</a>
        <a href="#" onclick="redirect('register.php')">Register</a>
    </nav>
</header>
<div class="hero">
    <h1>Find your perfect domain</h1>
    <form action="domain-search.php" method="get">
        <input type="text" name="domain" placeholder="Enter domain name">
        <button type="submit">Search</button>
    </form>
</div>
<div class="cards">
    <div class="card">
        <h3>Basic Hosting</h3>
        <p>Perfect for beginners.</p>
        <strong>$2.99/month</strong>
    </div>
    <div class="card">
        <h3>Standard Hosting</h3>
        <p>Great for small businesses.</p>
        <strong>$5.99/month</strong>
    </div>
    <div class="card">
        <h3>Premium Hosting</h3>
        <p>Advanced features included.</p>
        <strong>$9.99/month</strong>
    </div>
</div>
<footer>&copy; 2025 GoDaddy Clone by Arooj</footer>
<script>
    function redirect(page) {
        window.location.href = page;
    }
</script>
</body>
</html>
