<?php 
        include "connect.php";
        if (isset($_POST["submit"])) {
            $productName = $_POST['productName'];
            $imgName = basename($_FILES['img']['name']);
            $Price = $_POST['Price'];
       

            move_uploaded_file($_FILES['img']['tmp_name'], '../img/'.$imgName);
            $sql = "INSERT INTO `laptop`(`productname`, `prices`, `img`) 
                    VALUES ('$productName', '$Price' ,'$imgName')";
            
            $result = $conn->query($sql);
            if (!$result) {
                die("Lỗi kết nối: " . $conn->error);
            
            }
        }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Thêm Sản Phẩm</title>
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
            <a href="../index.php"><input type="button" value="Hủy" class="cancel"></a> 

        </form>
    </body>
    </html>
