<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vendors/css/normalize.css">
    <link rel="stylesheet" href="./assest/css/style.css">
    <link rel="stylesheet" href="./assest/images/about/themify-icons-font/themify-icons/themify-icons.css">
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- script -->
    <!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <title>SG4Store | Ecommerce Website Design </title>
</head>

<body>
        
            <header class="header">
                <div class="header-container">
                    <div class="header__topnavbar" style="background-color: #000">
                        <marquee behavior="scroll" direction="right" scrollamount="10">
                            <div class="header-promotion">
                                    <i class="fa-solid fa-globe"></i>
                                <span>DAILY SALE UP TO 15% PLUSCLUB, COLORFUL PAINT TEE </span>
                            </div>   
                        </marquee>
                    </div>
                    <div class="header__navbar" id="myHeader">
                        <div class="header__logo">
                            <a href="index.php"><img src="./assest/images/web/sg4-removebg-preview.png" alt="logo" width="125px">
                            </a>
                        </div>
                            <nav class="navbar">
                                <ul id="MenuItems" class="header__navbar-list">
                                    <li><a href="index.php">TRANG CHỦ</a></li>
                                    <li><a href="products-shirt.php">ÁO</a></li>
                                    <li><a href="products-pants.php">QUẦN</a></li>
                                    <li><a href="products-accessories.php">PHỤ KIỆN</a></li>
                                </ul>
                            </nav>
                        <a href="account.php"><button style="border:none" class="icon-user"><i class="fa-solid fa-user"></i></button></a>
                        <a href="cart.html"><button style="border:none" ><i class="fa-solid fa-cart-shopping"></i></button></a>
                        <button style="border:none" class="js-search" ><i class="fa-solid fa-magnifying-glass"></i></button>
                        <img src="./assest/images/menu.png" class="menu-icon"
                        onclick="menutoggle()">
                    </div>
                    <div class="header_botnavbar">
                        <ul class="bot-nav-list">
                            <li class="bot-nav-items">
                                <a href="./aboutus.php">Về chúng tôi</a>
                            </li>
                            <li class="bot-nav-items">
                                <a href="./stores.php">Danh sách cửa hàng</a>
                            </li>
                            <li class="bot-nav-items">
                                <a href="./collection.php">Bộ sưu tập</a>
                            </li>
                            <li class="bot-nav-items">
                                <a href="./blog.php">Blog</a>
                            </li>
                            <li class="bot-nav-items">
                                <a href="#footer">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
    
                    
                </div>
                
            </header>
            <div class="modal js-modal">
                <div class="modal-container js-modal-container">
                    <div class="modal-close js-modal-close">
                        <i class="fa-regular fa-circle-xmark"></i>
                    </div>
                    <header class="modal-header">
                        <h3 class="modal-title">TÌM KIẾM SẢN PHẨM</h3>
                    </header>
                    <div class="modal-body">
                            <div class="search-bar">
                                <input type="text" placeholder="search anything" class="brandsearch" id="search-text">
                                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                            <div class="search-extend">
                                <select class="brandsearch" id="filter-category">
                                    <option value="">Loại</option>
                                    <option value="1">Áo</option>
                                    <option value="2">Quần</option>
                                    <option value="3">Phụ kiện</option>
                                </select>
                                <div> 
                                    <input type="text" id="priceform" class="brandsearch" style="border:1px solid #ccc" placeholder="Giá từ"> &mdash; 
                                    <input type="text" id="priceto" class="brandsearch" style="border:1px solid #ccc" placeholder="Đến"></div>
                                </div>
                            </div>
                            <div class="search-container">
                                <div class="searching">
                                    <ul class="search-products" id="search-products">
                                        <div class="row"> 
                                                <h1 style="color: #ccc; text-align:center;">Không tìm thấy sản phẩm</h1>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
</body>

<!-- ajax search -->
<script>
    $(document).ready(function() {
    $('.brandsearch').change(function(event) {
        event.preventDefault();
        var categoryFilter = $('#filter-category').val();
        var search = $('#search-text').val();
        var min_price = $('#priceform').val();
        var max_price = $('#priceto').val();
        $.ajax({
        type: 'POST',
        url: 'search-modal.php',
        data: {categoryFilter: categoryFilter, search: search, min_price: min_price, max_price: max_price},
        success: function(data) {
            $('#search-products').html(data);
        }
        });
    });
    });
</script>