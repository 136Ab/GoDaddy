<?php include("db.php"); ?>
<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($id, $hashedPassword);
    $stmt->fetch();

    if (password_verify($password, $hashedPassword)) {
        $_SESSION['user_id'] = $id;
        echo "<script>window.location.href='dashboard.php';</script>";
    } else {
        echo "<script>alert('Invalid credentials');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login - GoDaddy Clone</title>
    <style>
        body { font-family: sans-serif; background: #f7f7f7; }
        .form-container { max-width: 400px; margin: 60px auto; background: white; padding: 30px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        input { width: 100%; padding: 10px; margin: 10px 0; }
        button { width: 100%; padding: 10px; background: #111; color: white; border: none; }
        a { display: block; text-align: center; margin-top: 15px; text-decoration: none; color: #111; }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Login</h2>
        <form method="post">
            <input type="email" name="email" placeholder="Email address" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
            <a href="#" onclick="redirect('register.php')">Create an account</a>
        </form>
    </div>
    <script>
        function redirect(page) {
            window.location.href = page;
        }
    </script>
</body>
</html>
