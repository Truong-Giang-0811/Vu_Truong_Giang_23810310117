<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<h1>Trang quản trị</h1>
<p>Xin chào, <strong><?php echo $_SESSION['user']; ?></strong></p>
<a href="cart.php">Đi đến giỏ hàng (Bài 4)</a> | 
<a href="logout.php">Đăng xuất</a>