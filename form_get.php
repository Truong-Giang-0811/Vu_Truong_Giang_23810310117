<form method="GET" action="">
    <input type="text" name="keyword" placeholder="Nhập từ khóa...">
    <button type="submit">Tìm kiếm</button>
</form>

<?php
if (isset($_GET['keyword'])) {
    $keyword = htmlspecialchars($_GET['keyword']);
    echo "<h3>Bạn đang tìm kiếm từ khóa: $keyword</h3>";
}
?>