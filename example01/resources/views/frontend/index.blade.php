<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hữu Khánh</title>
    <link rel="stylesheet" href="index.css">
    <script src="https://kit.fontawesome.com/56027eae29.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style-prefix.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet">

      <script src="js/jquery-2.0.0.min.js" type="text/javascript"></script>

      <!-- Bootstrap4 files-->
      <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
      <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
      
      <!-- Font awesome 5 -->
      <link href="fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">
      
      <!-- custom style -->
      <link href="css/ui.css" rel="stylesheet" type="text/css"/>
      <link href="css/responsive.css" rel="stylesheet" type="text/css" />
      
      <!-- custom javascript -->
      <script src="js/script.js" type="text/javascript"></script>
</head>
<body>
    <!-- Header Section -->
    @include('frontend.header')
    <!-- Slider Section --> 
    <section class="slider">
        <div class="container">
            <div class="slider-content">
                <!-- Slider Content Goes Here -->
               <img src="https://img.freepik.com/free-photo/urban-landscape-japan-car_23-2148889531.jpg?t=st=1714808941~exp=1714812541~hmac=1e13e89f6fe6c8a018b754323f39f0ce1865b6a35697455a72cd24ea6f4bc65f&w=1380" alt="">
            </div>
        </div>
    </section>

    <!-- Product Categories Section -->
    <section class="product-category">
        <div class="container">
            <h2>Categories</h2>
            <div class="product-grid " >
                <div class="product bg bg-white" style="text-align: center; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                    <img src="images/products/sports-1.jpg" alt="Product 1" style="width: 150px;margin-bottom: 10px;">
                    <h3>Giày thể thao</h3>
                </div>
                <!-- Add more products as needed -->
                <div class="product bg bg-white" style="   text-align: center; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                    <img src="images/products/clothes-1.jpg" alt="Product 1" style="width: 150px;margin-bottom: 10px;">
                    <h3>Áo nữ</h3>
                </div>
                <div class="product bg bg-white" style="   text-align: center; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                    <img src="images/products/jacket-4.jpg" alt="Product 1" style="width: 150px;margin-bottom: 10px;">
                    <h3>Áo nam</h3>
                </div>
                <div class="product bg bg-white" style="   text-align: center; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                    <img src="images/products/shorts-1.jpg" alt="Product 1" style="width: 150px;margin-bottom: 10px;">
                    <h3>Đồ bộ nữ</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- New Products Section -->

    @include('frontend.product')
    <!-- Latest Posts Section -->
  

    <!-- Footer Section -->

    @include('frontend.contact')

    <!-- Copyright Section -->
    <div class="copyright">
        <div class="container">
            <p>&copy; 2024 Your Website</p>
        </div>
    </div>

</body>
</html>
