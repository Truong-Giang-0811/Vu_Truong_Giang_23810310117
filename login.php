<?php
session_start();
require 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM students WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(); 

    if ($user && password_verify($pass, $user['password'])) {
        $_SESSION['user'] = $user['email'];
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Sai email hoặc mật khẩu!";
    }
}
?>

<form method="POST">
    <h2>Đăng Nhập</h2>
    <?php if(isset($error)) echo "<p style='color:red'>$error</p>"; ?>
    Email: <input type="email" name="email" required><br>
    Mật khẩu: <input type="password" name="password" required><br>
    <button type="submit">Đăng nhập</button>
</form>