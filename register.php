<?php
require 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    // Mã hóa mật khẩu
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO students (email, password) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    
    if ($stmt->execute([$email, $hashed_password])) {
        echo "Đăng ký thành công! <a href='login.php'>Đăng nhập ngay</a>";
    }
}
?>

<form method="POST">
    <h2>Đăng ký</h2>
    Email: <input type="email" name="email" required><br>
    Mật khẩu: <input type="password" name="password" required><br>
    <button type="submit">Đăng ký</button>
</form>