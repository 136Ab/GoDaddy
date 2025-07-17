<?php
session_start();
$domain = isset($_SESSION['checkout_domain']) ? $_SESSION['checkout_domain'] : 'N/A';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Checkout - GoDaddy Clone</title>
    <style>
        body { font-family: sans-serif; background: #fff; padding: 30px; }
        .container { max-width: 600px; margin: auto; text-align: center; padding: 20px; background: #f2f2f2; }
        button { padding: 10px 20px; background: green; color: white; border: none; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Checkout Complete</h2>
        <p>You purchased: <strong><?= htmlspecialchars($domain) ?></strong></p>
        <p>Thank you for purchasing your domain!</p>
        <button onclick="window.location.href='domain-search.php'">Buy Another Domain</button>
    </div>
</body>
</html>
