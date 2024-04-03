<?php
if(isset($_GET["productName"])){
    $productName = $_GET["productName"];

    // Kết nối đến cơ sở dữ liệu
    include "connect.php";

    // Sử dụng Prepared Statements để tránh SQL Injection
    $sql = "DELETE FROM laptop WHERE productName=?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Gán giá trị và thực thi truy vấn
        $stmt->bind_param("s", $productName);
        $stmt->execute();

        // Đóng kết nối và chuyển hướng trang
        $stmt->close();
        $conn->close();

        header("location: ../sanphamadmin.php");
        exit;
    } else {
        echo "Lỗi trong quá trình chuẩn bị truy vấn.";
    }
}
?>
