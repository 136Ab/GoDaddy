<?php
session_start();
if (isset($_POST['domain'])) {
    $domain = trim($_POST['domain']);
    $_SESSION['selected_domain'] = $domain;
    echo "<script>window.location.href='cart.php';</script>";
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Domain Search - GoDaddy Clone</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; text-align: center; padding-top: 100px; }
        input[type="text"] { padding: 10px; width: 300px; font-size: 16px; }
        button { padding: 10px 20px; background: green; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h2>Search for Your Domain</h2>
    <form method="post">
        <input type="text" name="domain" placeholder="Enter domain (e.g. gbob.com)" required>
        <button type="submit">Search</button>
    </form>
</body>
</html>
