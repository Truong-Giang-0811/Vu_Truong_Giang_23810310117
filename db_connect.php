<?php
$host = 'localhost';
$db   = 'buoi2_php';
$user = 'root';
$pass = ''; // Thay đổi nếu bạn có đặt pass cho MySQL
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    // Ghi log lỗi thật vào file nếu cần, nhưng hiển thị cho user thì nên thân thiện
    die("Hệ thống đang bảo trì, vui lòng quay lại sau.");
}
?>