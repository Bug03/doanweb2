<?php
include 'header.php'
?>
<body>
    <div class="products">
        <div class="container">
            <div class="row row-2"  style="margin-top: 20px;">
                <div class="div">
                    <h2>SẢN PHẨM</h2>
                    <p style="font-size: 12px; font-weight:200 ;">Trang chủ / Quần</p>
                </div>
                <div class="products-search">
                    <div class="box-search">
                        <div class="box-search-icon">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <div class="box-search-input">
                            <input type="text" placeholder="Search" id="box-search-input">
                        </div>
                        <span class="box-search-clear" onclick="document.getElementById('box-search-input').value =' '">
                            <i class="fa-regular fa-x"></i>
                        </span>
                    </div>
                    <div class="box-search-extend">
                        <select id="brandsearch">
                            <option value="">Màu sắc</option>
                                <option value="Áo">Đen</option>
                                <option value="Quần">Trắng</option>
                                <option value="Phụ kiện">Xanh</option>
                                <option value="Phụ kiện">Tím</option>
                                <option value="Phụ kiện">Vàng</option>
                                <option value="Phụ kiện">Xám</option>
                                <option value="Phụ kiện">Kem</option>
                        </select>
                        <div style="margin-left: 10px;">
                            <input type="text" id="priceform" style="border:1px solid #ccc" placeholder="Giá từ">
                            &mdash;
                            <input type="text" id="priceto" style="border:1px solid #ccc" placeholder="Đến">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-4 col-4_products">
                    <a href="product-details-2.html"><img
                            src="./assest/images/tên spham-màu nha/Quần nè/Jeans _ Black.png" alt=""></a>
            
                    <h4>Black Jeans</h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>450.000 VND</p>
                    <div class="product-btn">
                        <div class="option">
                            <div class="add separate">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <div style= "display: inline-block;"onclick="showSuccessToast();">Thêm vào giỏ hàng</div>
                            </div>
                            <div class="infor">
                                <i class="fa-solid fa-eye"></i>
                                <a href="./product-details-2.html" style="color: #fff ;">Thông tin chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-4_products">
                    <a href="./product-details-2.html"><img src="./assest/images/tên spham-màu nha/Quần nè/Khaki _ Beige.png" alt=""></a>
                    <h4>Beige Khaki</h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>500.000 VND</p>
                    <div class="product-btn">
                        <div class="option">
                            <div class="add separate">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <div style= "display: inline-block;"onclick="showSuccessToast();">Thêm vào giỏ hàng</div>
                            </div>
                            <div class="infor">
                                <i class="fa-solid fa-eye"></i>
                                <a href="./product-details-2.html" style="color: #fff ;">Thông tin chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-4_products">
                    <a href="./product-details-2.html"><img src="./assest/images/tên spham-màu nha/Quần nè/Shorpant _ Black.png" alt=""></a>
                    <h4>Black Shorpant </h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>500.000 VND</p>
                    <div class="product-btn">
                        <div class="option">
                            <div class="add separate">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <div style= "display: inline-block;"onclick="showSuccessToast();">Thêm vào giỏ hàng</div>
                            </div>
                            <div class="infor">
                                <i class="fa-solid fa-eye"></i>
                                <a href="./product-details-2.html" style="color: #fff ;">Thông tin chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-4_products">
                    <a href="./product-details-2.html"><img src="./assest/images/tên spham-màu nha/Quần nè/Shortpant___Cream-removebg-preview.png" alt=""></a>
                    <h4>Cream Shortpant </h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p>450.000 VND</p>
                    <div class="product-btn">
                        <div class="option">
                            <div class="add separate">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <div style= "display: inline-block;"onclick="showSuccessToast();">Thêm vào giỏ hàng</div>
                            </div>
                            <div class="infor">
                                <i class="fa-solid fa-eye"></i>
                                <a href="./product-details-2.html" style="color: #fff ;">Thông tin chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4 col-4_products">
                    <a href="./product-details-2.html"><img src="./assest/images/tên spham-màu nha/Quần nè/Shortpant _ Green.png" alt=""></a>
                    <h4>Green Shortpant </h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>450.000 VND</p>
                    <div class="product-btn">
                        <div class="option">
                            <div class="add separate">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <div style= "display: inline-block;"onclick="showSuccessToast();">Thêm vào giỏ hàng</div>
                            </div>
                            <div class="infor">
                                <i class="fa-solid fa-eye"></i>
                                <a href="./product-details-2.html" style="color: #fff ;">Thông tin chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-4_products">
                    <a href="./product-details-2.html"><img src="./assest/images/tên spham-màu nha/Quần nè/Shortpant _ Pink.png" alt=""></a>
                    <h4>Pink Shortpant </h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>450.000 VND</p>
                    <div class="product-btn">
                            <div class="option">
                                <div class="add separate">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <div style= "display: inline-block;"onclick="showSuccessToast();">Thêm vào giỏ hàng</div>
                                </div>
                                <div class="infor">
                                    <i class="fa-solid fa-eye"></i>
                                    <a href="./product-details-2.html" style="color: #fff ;">Thông tin chi tiết</a>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-4 col-4_products">
                    <a href="./product-details-2.html"><img src="./assest/images/tên spham-màu nha/Quần nè/Straight Pants _ Black.png" alt=""></a>
                    <h4>Black Straight Pants </h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>500.000 VND</p>
                    <div class="product-btn">
                            <div class="option">
                                <div class="add separate">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <div style= "display: inline-block;"onclick="showSuccessToast();">Thêm vào giỏ hàng</div>
                                </div>
                                <div class="infor">
                                    <i class="fa-solid fa-eye"></i>
                                    <a href="./product-details-2.html" style="color: #fff ;">Thông tin chi tiết</a>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-4 col-4_products">
                    <a href="./product-details-2.html"><img src="./assest/images/tên spham-màu nha/Quần nè/Straight Pants _ Cream.png" alt=""></a>
                    <h4>Cream Straight Pants </h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p>500.000 VND</p>
                    <div class="product-btn">
                            <div class="option">
                                <div class="add separate">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <div style= "display: inline-block;"onclick="showSuccessToast();">Thêm vào giỏ hàng</div>
                                </div>
                                <div class="infor">
                                    <i class="fa-solid fa-eye"></i>
                                    <a href="./product-details-2.html" style="color: #fff ;">Thông tin chi tiết</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4 col-4_products">
                    <a href="./product-details-2.html"><img src="./assest/images/tên spham-màu nha/Quần nè/Thiết kế chưa có tên (6).png" alt=""></a>
                    <h4>Light green Shorpant </h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>450.000 VND</p>
                    <div class="product-btn">
                            <div class="option">
                                <div class="add separate">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <div style= "display: inline-block;"onclick="showSuccessToast();">Thêm vào giỏ hàng</div>
                                </div>
                                <div class="infor">
                                    <i class="fa-solid fa-eye"></i>
                                    <a href="./product-details-2.html" style="color: #fff ;">Thông tin chi tiết</a>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-4 col-4_products">
                    <a href="./product-details-2.html"><img src="./assest/images/tên spham-màu nha/Quần nè/Thiết kế chưa có tên (4).png" alt=""></a>
                    <h4>Purple Shorpant </h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>450.000 VND</p>
                    <div class="product-btn">
                            <div class="option">
                                <div class="add separate">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <div style= "display: inline-block;"onclick="showSuccessToast();">Thêm vào giỏ hàng</div>
                                </div>
                                <div class="infor">
                                    <i class="fa-solid fa-eye"></i>
                                    <a href="./product-details-2.html" style="color: #fff ;">Thông tin chi tiết</a>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-4 col-4_products">
                    <a href="./product-details-2.html"><img src="./assest/images/tên spham-màu nha/Quần nè/Thiết kế chưa có tên (3).png" alt=""></a>
                    <h4>Pink Straight Pants </h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>500.000 VND</p>
                    <div class="product-btn">
                            <div class="option">
                                <div class="add separate">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <div style= "display: inline-block;"onclick="showSuccessToast();">Thêm vào giỏ hàng</div>
                                </div>
                                <div class="infor">
                                    <i class="fa-solid fa-eye"></i>
                                    <a href="./product-details-2.html" style="color: #fff ;">Thông tin chi tiết</a>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-4 col-4_products">
                    <a href="./product-details-2.html"><img src="./assest/images/tên spham-màu nha/Quần nè/Thiết kế chưa có tên (2).png" alt=""></a>
                    <h4>Blue Straight Pants </h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p>550.000 VND</p>
                    <div class="product-btn">
                            <div class="option">
                                <div class="add separate">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <div style= "display: inline-block;"onclick="showSuccessToast();">Thêm vào giỏ hàng</div>
                                </div>
                                <div class="infor">
                                    <i class="fa-solid fa-eye"></i>
                                    <a href="./product-details-2.html" style="color: #fff ;">Thông tin chi tiết</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="page-btn" style="text-align: center;">
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>4</span>
                <span>&#8594</span>
            </div>
        </div>
    </div>
    </div>

    <!----------- footer ----------->
    <?php 
    include 'footer.php'
    ?>

        <!-- modal -->
        <div class="modal js-modal">
            <div class="modal-container js-modal-container">
                <div class="modal-close js-modal-close">
                    <i class="fa-regular fa-circle-xmark"></i>
                </div>
                <header class="modal-header">
                    <h3 class="modal-title">TÌM KIẾM SẢN PHẨM</h3>
                </header>

                <div class="modal-body">
                    <form action="" class="search-bar">
                        <input type="text" name="" placeholder="search anything">
                        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <div class="search-extend">
                        <select id="brandsearch">
                            <option value="">Tất cả</option>
                            <option value="Áo">Áo</option>
                            <option value="Quần">Quần</option>
                            <option value="Phụ kiện">Phụ kiện</option>
                        </select>
                        <div>
                            <input type="text" id="priceform" style="border:1px solid #ccc" placeholder="Giá từ">
                            &mdash;
                            <input type="text" id="priceto" style="border:1px solid #ccc" placeholder="Đến">
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <!-- toast -->
        <div id="toast"></div>

        <div>

            <script src="./assest/js/toast.js"></script>
            <!-- modal search jaavascript -->
            <script>
                const buyBtn = document.querySelector('.js-search');
                const modal = document.querySelector('.js-modal');
                const modalContainer = document.querySelector('.js-modal-container')
                const modalClose = document.querySelector('.js-modal-close')
                function showSearch() {
                    modal.classList.add('open');
                }
                function hideSearch() {
                    modal.classList.remove('open');
                }

                buyBtn.addEventListener('click', showSearch);

                modalClose.addEventListener('click', hideSearch);

                modal.addEventListener('click', hideSearch);

                modalContainer.addEventListener('click', function (event) {
                    event.stopPropagation();
                })
            </script>
            <!-- ---js for toggle menu ----->
            <script>
                var MenuItems = document.getElementById("MenuItems");

                MenuItems.style.maxHeight = "0px";
                function menutoggle() {
                    if (MenuItems.style.maxHeight == "0px") {
                        MenuItems.style.maxHeight = "200px";
                    }
                    else {
                        MenuItems.style.maxHeight = "0px"
                    }
                }
            </script>
            <!-- sticky -->
            <script>
                window.onscroll = function () { myFunction() };

                var header = document.getElementById("myHeader");
                var sticky = header.offsetTop;

                function myFunction() {
                    if (window.pageYOffset > sticky) {
                        header.classList.add("sticky");
                    } else {
                        header.classList.remove("sticky");
                    }
                }
            </script>
            <!-- toast -->
            <script>
                function showSuccessToast() {
                    toast({
                        title: "Thành công!",
                        message: "Bạn đã thêm sản phẩm vào giỏ hàng",
                        type: "success",
                        duration: 5000
                    });
                }

                function showErrorToast() {
                    toast({
                        title: "Thất bại!",
                        message: "Có lỗi xảy ra, vui lòng liên hệ quản trị viên.",
                        type: "error",
                        duration: 5000
                    });
                }
            </script>

             <!-- search-box -->
    <script>
        const icon = document.querySelector('.box-search-icon');
        const search = document.querySelector('.box-search');
        icon.onclick = function() {
            search.classList.toggle('active');
        }
    </script>

</body>

</html>