<?php
include 'header.php';
require_once ('db/dbhelper.php');


$sql = "SELECT * FROM sanpham";
$productList = executeResult($sql);
?>



<body>
    <div class="products">
        <div class="container">
            <div class="row row-2" style="margin-top: 20px;">
                <div class="div">
                    <h2>SẢN PHẨM</h2>
                    <p style="font-size: 12px; font-weight:200 ;">Trang chủ / Áo</p>
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
            <?php
            if (count($productList) > 0) {
                $soSP = count($productList);
                $countPerRow = 0;
                $s = ""; // biến s để nối chuỗi html
                foreach ($productList as $row) {
                    if ($countPerRow == 0) {
                        // new row 
                        $s .= '<div class="row">';
                    }
                    if ($countPerRow <= 4) {
                        if ($row) {
                            $countPerRow++;
                            $s .= '<div class="col-4 col-4_products">';
                            $s .= sprintf('<a href="product-details.php?id=%s">
                                <img src="%s" alt=""></a>
                                <h4>%s</h4>'
                                , $row['ID'], $row['HinhSP'], $row['TenSP']
                            );
                            $s .= sprintf('<p>%s VND</p>', number_format($row['GiaSP'], 0, '', ','));
                            $s .= sprintf(
                                ' <div class="product-btn">
                                        <div class="option">
                                            <div class="add separate">
                                                <i class="fa-solid fa-cart-shopping"></i>
                                                <div style= "display: inline-block;"onclick="showSuccessToast();">Thêm vào giỏ hàng</div>
                                            </div>  
                                            <div class="infor">
                                                <i class="fa-solid fa-eye"></i>
                                                <a href="product-details.php?id=%s" style="color: #fff ;">Thông tin chi tiết</a>
                                            </div>
                                        </div>
                                    </div>'
                                , $row['ID']
                            );
                            $s .= '</div>';
                        }
                    }
                    if ($countPerRow > 3) {
                        // end row 
                        $s .= '</div>';
                        $countPerRow = 0;
                    }
                }
                if ($countPerRow != 0) {
                    // end row
                    $s .= '</div>';
                }
                echo ($s);
                }
            ?>
            <div class="page-btn" style="text-align: center ;">
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
    <?php include 'footer.php';
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

    <div id="toast">

    </div>
    <script src="./assest/js/toast.js"></script>
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
    <!-- search-box -->
    <script>
        const icon = document.querySelector('.box-search-icon');
        const search = document.querySelector('.box-search');
        icon.onclick = function () {
            search.classList.toggle('active');
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
</body>

</html>