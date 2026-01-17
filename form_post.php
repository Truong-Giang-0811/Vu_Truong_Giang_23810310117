<form method="POST" action="">
    <input type="text" name="username" placeholder="Tên đăng nhập" required>
    <input type="password" name="password" placeholder="Mật khẩu" required>
    <button type="submit">Đăng ký</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['username']);
    echo "<h3>Đã nhận thông tin của $name</h3>";
}
?>