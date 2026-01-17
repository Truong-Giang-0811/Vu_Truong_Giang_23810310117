<?php
session_start();

// Giả sử danh sách sản phẩm
$products = [
    1 => ['name' => 'iPhone 15', 'price' => 1000],
    2 => ['name' => 'Macbook M3', 'price' => 2000],
    3 => ['name' => 'AirPods Pro', 'price' => 250]
];

// Khởi tạo giỏ hàng nếu chưa có
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Xử lý khi nhấn nút "Thêm vào giỏ"
if (isset($_GET['add'])) {
    $id = $_GET['add'];
    $_SESSION['cart'][] = $id; // Thêm ID vào mảng session
    header("Location: cart.php"); // Load lại trang để tránh trùng lặp khi F5
    exit();
}
?>

<h2>Sản phẩm</h2>
<ul>
    <?php foreach ($products as $id => $p): ?>
        <li>
            <?php echo $p['name']; ?> - $<?php echo $p['price']; ?> 
            <a href="cart.php?add=<?php echo $id; ?>">[Thêm vào giỏ]</a>
        </li>
    <?php endforeach; ?>
</ul>

<h2>Giỏ hàng của bạn</h2>
<ul>
    <?php 
    if (empty($_SESSION['cart'])) {
        echo "Giỏ hàng trống.";
    } else {
        foreach ($_SESSION['cart'] as $productId) {
            echo "<li>Sản phẩm ID: " . $productId . " - " . $products[$productId]['name'] . "</li>";
        }
    }
    ?>
</ul>
<a href="dashboard.php">Quay lại Dashboard</a>