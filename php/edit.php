<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/create.css">
<title>Sửa sản phẩm</title>
</head>
<body>
<?php
include("connect.php");

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_GET["productName"])) {
        header("location: sanphamadmin.php");
        exit;
    }
    $id = $_GET['productName'];

    $sql = "SELECT * FROM laptop "; 
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location: sanphamadmin.php");
        exit;
    }
    $productName = $row["productName"];
    $price = $row["price"];
    $imgName = $row["img"];
    $newPrice = $row["newprice"];
    $oldPrice = $row["oldprice"];
} else{
    $productName = $_POST["productName"];
    $newPrice = $_POST["newPrice"];
    $price = $_POST["price"];
    $imgName = $_POST["img"];
    $oldPrice = $_POST["oldPrice"];
    $sql = "UPDATE laptop SET price='$price',img='$imgName' ,newPrice='$newPrice',oldPrice='$oldPrice' WHERE productName='$productName' ";

    $result = $conn->query($sql);

    if (!$result) {
        die("Lỗi kết nối: " . $conn->connect_error);
    }
    header("location: ../sanphamadmin.php");
    exit;
}
?>
<!-- Your HTML form code with pre-filled values -->

<div class="container">
<h2>Sửa Sản Phẩm </h2>
        <form method="post" enctype="multipart/form-data">  
            <!-- luôn cần có để lấy file -->
            
            <label for="productName">Tên Sản Phẩm:</label>
            <input type="text" id="productName" name="productName" required><br><br>

            <label for="img">Hình Ảnh:</label>
            <input type="file" id="img" name="img" required><br><br>

            <label for="oldPrice">Giá Cũ:</label>
            <input type="text" id="oldPrice" name="oldPrice" required><br><br>

            <label for="newPrice">Giá Mới:</label>
            <input type="text" id="newPrice" name="newPrice" required><br><br>

            <label for="percent">Phần Trăm Giảm Giá:</label>
            <input type="text" id="percent" name="percent" required><br><br>
        
            
            <input type="submit" name="submit" value="Sửa Sản Phẩm">
            <a href="../sanphamadmin.php"><input type="button" value="Hủy" class="cancel"></a> 

        </form>
</div>
</body>
</html>