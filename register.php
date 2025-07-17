<?php include("db.php"); ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);
    $stmt->execute();
    echo "<script>window.location.href='login.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register - GoDaddy Clone</title>
    <style>
        body { font-family: sans-serif; background: #e8f0fe; }
        .form-container { max-width: 400px; margin: 60px auto; background: white; padding: 30px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        input { width: 100%; padding: 10px; margin: 10px 0; }
        button { width: 100%; padding: 10px; background: #0073e6; color: white; border: none; }
        a { display: block; text-align: center; margin-top: 15px; text-decoration: none; color: #0073e6; }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Create Account</h2>
        <form method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email address" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Register</button>
            <a href="#" onclick="redirect('login.php')">Already have an account? Login</a>
        </form>
    </div>
    <script>
        function redirect(page) {
            window.location.href = page;
        }
    </script>
</body>
</html>
