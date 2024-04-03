<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kiểm tra dữ liệu đã được gửi qua POST hay chưa
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Kiểm tra thông tin đăng nhập
        if ($email === "tuanhuy@gmail.com" && $password === "123") {
            // Đăng nhập thành công, thực hiện hành động sau khi đăng nhập
            header('location: index.php');
            exit();
        } else {
            // Đăng nhập thất bại, hiển thị thông báo
            $error_message = "Login failed. Please check your email and password.";
        }
    } else {
        $error_message = "Please provide both email and password.";
    }
    if ($email === "123@gmail.com" && $password === "123") {
        // Đăng nhập thành công, thực hiện hành động sau khi đăng nhập
        header('location: php/create.php');
        exit();
    } else {
        // Đăng nhập thất bại, hiển thị thông báo
        $error_message = "Login failed. Please check your email and password.";
    }
    if ($email === "admin@gmail.com" && $password === "123") {
        // Đăng nhập thành công, thực hiện hành động sau khi đăng nhập
        header('location: sanphamadmin.php');
        exit();
    } else {
        // Đăng nhập thất bại, hiển thị thông báo
        $error_message = "Login failed. Please check your email and password.";
    }
} else {
    $error_message = "Please provide both email and password.";
}

?>
<!DOCTYPE html>
<html>
<head>
    <!-- Your head content here -->
</head>
<body>
    <!-- Your HTML content here -->

    <?php
    // Hiển thị thông báo lỗi nếu có
    if (isset($error_message)) {
        echo '<script>alert("' . $error_message . '");</script>';
    }
    ?>
</body>
</html>
