<?php require 'db_connect.php'; ?>

<form method="POST">
    <input type="text" name="fullname" placeholder="Họ tên" required><br>
    <input type="text" name="student_code" placeholder="Mã SV" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <button type="submit">Thêm mới</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = $_POST['fullname'];
    $student_code = $_POST['student_code'];
    $email = $_POST['email'];

    // Sử dụng Prepared Statement với dấu hỏi (?)
    $sql = "INSERT INTO students (fullname, student_code, email) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    
    if ($stmt->execute([$fullname, $student_code, $email])) {
        echo "<p style='color:green;'>Thêm sinh viên thành công!</p>";
    }
}
?>