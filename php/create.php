<?php 
include "connect.php";
if (isset($_POST["submit"])) {
    $productName = $_POST['productName'];
    $imgName = basename($_FILES['img']['name']);
    $oldPrice = $_POST['oldPrice'];
    $newPrice = $_POST['newPrice'];
    $percent = $_POST['percent'];

    move_uploaded_file($_FILES['img']['tmp_name'], '../img/'.$imgName);
    // Sửa cú pháp câu lệnh SQL và thêm kiểm tra dữ liệu trước khi thực thi
    $sql = "INSERT INTO `laptop`(`productName`, `price`, `img`, `percent`, `newprice`, `oldprice`) 
            VALUES ('$productName', '$oldPrice', '$imgName', '$percent', '$newPrice', '$oldPrice')";
    
    $result = $conn->query("SELECT * FROM `laptop` WHERE `productName` = '$productName'");
    if ($result->num_rows > 0) {
        echo "Sản phẩm đã tồn tại.";
    } else {
        if ($conn->query($sql) === TRUE) {
            echo "Thực hiện thành công";
        } else {
            echo "Lỗi: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Thêm Sản Phẩm</title>
        <link rel="stylesheet" type="text/css" href="../css/create.css">
    </head>
    <body>
    <h2>Thêm Sản Phẩm Mới</h2>
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
        
            
            <input type="submit" name="submit" value="Thêm Sản Phẩm">
            <a href="../sanphamadmin.php"><input type="button" value="Hủy" class="cancel"></a> 

        </form>
    </body>
    </html>
