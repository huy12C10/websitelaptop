<!DOCTYPE html>
<html>
<head>
    <title>Thông tin đơn hàng</title>
    <!-- Các phần CSS của bạn -->
</head>
<body>
    <h1>Thông tin đơn hàng</h1>
    <?php
// Kết nối đến cơ sở dữ liệu
include "connect.php";

// Lấy danh sách sản phẩm đã mua từ cơ sở dữ liệu
$sql = "SELECT * FROM laptop"; // Thay thế 'orders' bằng tên bảng chứa thông tin đơn hàng
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Hiển thị thông tin về đơn hàng
    while ($row = $result->fetch_assoc()) {
        echo "<p>Tên sản phẩm: " . $row["productName"] . "</p>";
        echo "<p>Giá sản phẩm: " . $row["price"] . "</p>";

    }
} else {
    echo "<p>Không có đơn hàng nào được tìm thấy.</p>";
}

// Đóng kết nối
$conn->close();
?>


    <!-- Các phần HTML khác hoặc định dạng thông tin đơn hàng -->

</body>
</html>
