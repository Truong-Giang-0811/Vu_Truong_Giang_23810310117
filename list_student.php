<?php
require 'db_connect.php';

$stmt = $pdo->query("SELECT * FROM students");
$students = $stmt->fetchAll();
?>

<h2>Danh sách sinh viên</h2>
<table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
    <thead>
        <tr style="background-color: #f2f2f2;">
            <th>ID</th>
            <th>Họ tên</th>
            <th>Mã SV</th>
            <th>Email</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $s): ?>
            <tr>
                <td><?= $s['id'] ?></td>
                <td><?= htmlspecialchars($s['fullname']) ?></td>
                <td><?= htmlspecialchars($s['student_code']) ?></td>
                <td><?= htmlspecialchars($s['email']) ?></td>
                <td>
                    <a href="#">Sửa</a> | 
                    <a href="#" onclick="return confirm('Xóa thật không?')">Xóa</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>