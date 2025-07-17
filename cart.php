<?php
session_start();
$domain = isset($_SESSION['selected_domain']) ? $_SESSION['selected_domain'] : 'No domain selected';

// Save domain for checkout
$_SESSION['checkout_domain'] = $domain;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cart - GoDaddy Clone</title>
    <style>
        body { font-family: Arial; background: #f9f9f9; padding: 30px; }
        .box { background: white; padding: 20px; max-width: 600px; margin: auto; box-shadow: 0 0 10px rgba(0,0,0,0.1); text-align: center; }
        button { background: #0073e6; color: white; padding: 10px 20px; border: none; }
    </style>
</head>
<body>
    <div class="box">
        <h2>Cart</h2>
        <p>1x Domain: <strong><?= htmlspecialchars($domain) ?></strong></p>
        <p>Total: $9.99</p>
        <form method="post" action="checkout.php">
            <button type="submit">Proceed to Checkout</button>
        </form>
    </div>
</body>
</html>
