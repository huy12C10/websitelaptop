<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/1.css">
    <
    <title>Document</title>
    <style>.menu {
        background:#024443;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        text-align: center;
    }
    .menu a {
        text-decoration: none;
        color: #fff;
        margin: 0 20px;
        font-size: 18px;
        
    }
    .menu a:hover {
        
        text-decoration: underline;
        
    }
    .search-container {
        border:3px solid #050505;   
        background: #fff;
        height: 30px;
        border-radius: 30px;
        padding: 10px 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        transition: 0.8s;
        
        
    }
    .search-container:hover > .search-input {
        width: 400px;
    }
    .search-container .search-input {
        background: transparent;
        border: none;
        
        width: 0px;
        font-weight: 500;
        font-size: 16px;
        transition: 0.8s;
    }
    .search-container .search-btn .fas {
        color: #5cbdbb;
    }

    .login-link {
    transition: background-color 0.3s ease, color 0.3s ease;
}

.login-link:hover {
    background-color: #5cbdbb;
    color: #fff;
}
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}



.danger{
background-color: #E32934;
color: #fff;
}
.danger:hover{
background-color: #c10310;
}
.primary{
  background-color: blue;
color: #fff;
}
.primary:hover{
  background-color: #c10310;
}
.btn{
display: inline-block;
padding: 8px 15px;
border-radius: 4px;
text-decoration: none;
text-align: center;
margin-right: 15px;
}
.container{
max-width: 1200px;
margin: auto;
padding-top: 40px;
}
.title{
font-weight: 700;
margin-bottom: 10px;
font-size: 40px;
text-transform: uppercase;
}
.submit{
background-color: #4285F4;
color: #fff;
display: inline-block;
padding: 16px 8px;
border-radius: 6px;
text-decoration: none;
text-align: center;

}
h1 {
    margin-bottom: 20px; /* Đặt khoảng cách giữa header và phần Sản phẩm */
  }
  
.submit:hover, .primary:hover{
background-color: #1967e5;
}
table{
width: 100%;
border-collapse: collapse;
font-size: 16px;
text-align: left;
padding: 10px;
}
thead{
text-transform: uppercase;
}
th, td{
padding: 10px;
vertical-align: middle;
border-bottom: 1px solid #E0E0E0;
}
.table{
border: 1px solid #E0E0E0;
border-radius: 10px;
padding: 20px 40px 40px 40px;
}
input[type=text], input[type=email]{
    border: 1px solid #E0E0E0;
    padding: 8px 15px;
    border-radius: 8px;
    font-size: 18px;
    margin-bottom: 20px;
    width: 100%;
    }
    .sex{
    margin-bottom: 20px;
    }
    .sex-title{
    margin-right: 40px;
    }
    .sex-item{
    display: inline-block;
    margin-right: 40px;
    }
    input[type=submit]{
    border: none;
    padding: 10px 15px;
    font-size: 16px;
    font-weight: 600;
    background-color: #1967e5;
    color: #fff;
    cursor: pointer;
    margin-right: 20px;
    border-radius: 8px;
    }
    input[type=submit]:hover{
    background-color: #4285F4;
    }
    .cancel{
    border: none;
    padding: 10px 40px;
    font-size: 16px;
    font-weight: 600;
    background-color: transparent;
    color: #1967e5;
    cursor: pointer;
    border: 1px solid #1967e5;
    border-radius: 8px;
    }
    .cancel:hover{
    background-color: #1967e5;
    color: #fff;
    }

    
    </style>
   
</head>
<body>
  
 
    

        <div class="menu-vertical">
        <nav> 
           
                    
                    <div class="menu">
                        <ul>
                            <!-- <li><img src="images (1)/images/download (1).png" alt=""></li> -->
                            <li>
                                <a href="dangki.php" target="_self" class="login-link">Đăng Nhập</a>
                            </li>
                            <li><a href="index.php">Trang chủ</a></li>
                            <li><a href="sanpham.php">Sản phẩm</a>
                            <li><a href="FAQs.php">Event</a></li>
                            <li><a href="php/create.php">Thêm sản phẩm</a></li>
                        </ul>
                        <div class="search-container">
                            <input type="text" name="search" placeholder="Search..." class="search-input">
                            <a href="#" class="search-btn">
                                <i class="fas fa-search"></i>
                            </a>
                        </div>
         </nav>
    </div>
  
        <main>
           
            
          
        
                 <div class="product-section">
            <?php 
            include "php/connect.php";
            $sql = "SELECT * FROM laptop";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "
                    <div class='product-card'>
                        <div class='pic'>
                            <img src='img/{$row['img']}' alt='hình sản phẩm'>
                        </div>
                        <h3>{$row['productName']}</h3>
                        <div class='price'>
                        <h4>Giá cũ:</h4>
                            <span class='old-price'>{$row['oldprice']}đ</span>
                            <br>
                            <h4>Giảm:</h4>
                            <br>
                            <span class='percent'>{$row['percent']}</span>
                            <br>
                            <h4>Giá mới:</h4>
                            <span class='new-price'>{$row['newprice']}đ</span>
                     

                          
                            <br>
                        </div>
                        <a href='php/edit.php?productName={$row['productName']}' class='btn primary'>Sửa</a>
                   
                        <a href='php/delete.php?productName={$row['productName']}' class='btn danger'>Xóa</a>

                          
                        </div>
                       
                        

                    </div>
                    </div>
                    ";
                }
            }
            ?>
 
     </main>
            
            <script>
                const buyButtons = document.querySelectorAll(".buy-button");
            
                buyButtons.forEach(button => {
                    button.addEventListener("click", function() {
                        // Chuyển hướng đến trang thanh toán
                        window.location.href = "payment.html";
                    });
                });
            </script>

<footer>
    <div class="contact" id="contact" style="padding-bottom: 10px !important;">
        <div class="contact-list contact-address"  >
          <h5><span><i class="fa fa-map-marker w3-xlarge w3-text-light-grey"></i></span>Địa chỉ</h5>
          <p> Địa chỉ: 10 đường số 3, cư xá Lữ Gia, P.15, Q.11, TP.HCM</p>
          <p> Địa chỉ: 10 đường số 3, cư xá Lữ Gia, P.15, Q.11, TP.HCM</p>
          <p>Địa chỉ: 10 đường số 3, cư xá Lữ Gia, P.15, Q.11, TP.HCM </p>
        </div>
        <div class="contact-list">
          <h5><span><i class="fa fa-envelope w3-xlarge w3-text-light-grey"></i></span>Nhập email để cập nhật thông tin hàng tuần</h5>
          <div class="email-contact">
            <input placeholder="Email"  type="email" style="margin: 8px 0px !important;"/>
            
            <button class="w3-btn w3-red w3-round " style="width: 100px; padding:3px 10px !important">Đăng kí</button>
          </div>
    
        </div>
        <div class="contact-list" >
          <h5><span><i class="fa fa-phone w3-xlarge w3-text-light-grey"></i></span>Điện Thoại</h5>
          <p>Điện thoại: 0921.77.77.77 - 0922.77.77.77</p>
          <p>Điện thoại: 0921.88.88.88 - 0922.88.88.88</p>
</footer>
</body>
</html>