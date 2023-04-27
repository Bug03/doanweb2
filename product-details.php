<?php
include 'header.php';
require_once ('db/dbhelper.php');



$id = $_GET["id"] ?? '';


$sql = "select sanpham.ID, sanpham.HinhSP, sanpham.TenSP, sanpham.MoTaSP ,sanpham.GiaSP, category.name, sanpham.created_at,galery.Hinh1,galery.Hinh2,galery.Hinh3  
    from (sanpham left join category 
    on sanpham.category_id = category.id)
    left join galery on sanpham.id = galery.product_id 
    where sanpham.ID = $id";
$row = executeSingleResult($sql);
$TenSP = $row['TenSP'] ?? '';
$HinhSP = $row['HinhSP'] ?? '';
$MoTaSP = $row['MoTaSP'] ?? '';
$GiaSP = $row['GiaSP'] ?? '';
$categoryId = $row['category_id'] ?? '';
$hinh1 = $row['Hinh1'] ?? '';
$hinh2 = $row['Hinh2'] ?? '';
$hinh3 = $row['Hinh3'] ?? '';
?>

<body>
        <!-- Single product details -->
        <div class="container single-product">
            <div class="row">
                <div class="col-2">
                    <img src="<?php echo $HinhSP ?>" width="100%" id = "productImg" >

                    <div class="small-img-row">
                        <div class="small-img-col">
                            <img src="<?= $HinhSP ?>" width="100%" class="small-img"  >
                        </div>
                        <div class="small-img-col">
                            <img src="<?= $hinh1?>" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="<?= $hinh2?>" width="100%" class="small-img" >
                        </div>
                        <div class="small-img-col">
                            <img src="<?= $hinh3?>" width="100%" class="small-img">
                        </div>
                    </div>


                </div>
                <div class="col-2">
                    <p>Trang chủ / <?= $row['name']?></p>
                    <h1><?= $TenSP?> <span id="name">Green</span></h1>
                    <h4><?= number_format($row['GiaSP'], 0, '', ',')?> VND</h4>
                    <form action="cart.php" method="post">
                        <select name="size">
                            <option>Chọn Size</option>
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                        </select>
                        <input type="number" name="Soluong" value="1">
                       <button class="btn" style="width:50%">Thêm vào giỏ hàng</button>
                    </form>
                    <h3>Chi tiết sản phẩm <i class="fa-solid fa-indent"></i></h3>
                    <br>
                    <p style="line-height: 18px ;">
                        <?= $row['MoTaSP']?>
                    </p>
                </div>
            </div>
        </div>

        <!-- title -->
        <div class="container">
            <div class="row row-2">
                <h2>Sản phẩm liên quan</h2>
                <p>View More</p>
            </div>
        </div>

    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-4 col-4_products">
                    <img src="./assest/images/tên spham-màu nha/Tee/Map_Tee___Cream-removebg-preview.png" alt="">
                    <h4>Cream Map Tee</h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>300.000 VND</p>
                </div>
                <div class="col-4 col-4_products">
                    <img src="./assest/images/tên spham-màu nha/Tee/Floral Tee _ Baby Blue.png" alt="">
                    <h4>Blue Floral Tee</h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>300.000 VND</p>
                </div>
                <div class="col-4 col-4_products">
                    <img src="./assest/images/tên spham-màu nha/Tee/Selflove_Tee___White-removebg-preview.png" alt="">
                    <h4>White Selflove Tee</h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <p>250.000 VND </p>
                </div>
                <div class="col-4 col-4_products">
                    <img src="./assest/images/tên spham-màu nha/Tee/Doraemon Tee _ Black.png" alt="">
                    <h4>Black Doraemon Tee</h4>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p>300.000 VND</p>
                </div>
            </div>
        </div>
        <div class="page-btn" style="text-align: center ;">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594</span>
        </div>
    </div>
</div>
    <!-- Footer -->
    <div id="social-media">
        <div class="social-container">
            <p> FIND US ON SOCIAL MEDIA </p>
            <div class="social-icons">
                <a><img src="./assest/images/about/facebook-icon.png" alt=""></a>
                <a><img src="./assest/images/about/instagram-icon.png" alt=""></a>
                <a><img src="./assest/images/about/linkedin-icon.png" alt=""></a>
                <a><img src="./assest/images/about/snapchat-icon.png" alt=""></a>
                <a><img src="./assest/images/about/twitter-icon.png" alt=""></a>
                <a><img src="./assest/images/about/whatsapp-icon.png" alt=""></a>
            </div>
        </div>
    </div>

    <div id="footer">
        <img src="./assest/images/about/wave2.png" alt="" class="footer-img">
        <div class="footer-container">
            <div class="row">
                <div class="col-4 footer-box">
                    <img src="./assest/images/web/sg4__3_-removebg-preview.png" alt="">
                    <p>Sự đầu tư từ chất lượng đóng gói, bao bì sản phẩm đến mỗi thước phim, hình ảnh cho tới cách làm chủ được nghệ thuật sắc màu và chỉn chu trong từng chi tiết đã đưa chúng tôi trở thành một trong những thương hiệu thời trang Streetwear được giới trẻ yêu thích, tin dùng hàng đầu tại Việt Nam.</p>
                </div>
                <div class="col-4 footer-box">
                    <p><b> CONTACT US </b></p>
                    <p><i class="ti ti-location-pin"></i>Việt Nam, Thành phố Hồ Chí Minh</p>
                    <p><i class="ti ti-mobile"></i>+84 123456789</p>
                    <p><i class="ti ti-email"></i>ddht@gmail.com</p>
                </div> 
                <div class="col-4 footer-box">
                    <p><b> SUBSCRIBE NEWSLETTER </b></p>
                    <input type="email" class="form-control" placeholder="Your Email">
                    <button type="button" class="btn btn-footer">Subscribe</button>
                </div>
        </div>
    </div>

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
                        <input type="text" id="priceform" style="border:1px solid #ccc" placeholder="Giá từ"> &mdash; 
                        <input type="text" id="priceto" style="border:1px solid #ccc" placeholder="Đến"></div>
                    </div>
                </div>
                
             
        </div>
    </div>

    <div id="toast"></div>

    <div>

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

        buyBtn.addEventListener('click',showSearch);

        modalClose.addEventListener('click',hideSearch);

        modal.addEventListener('click',hideSearch);

        modalContainer.addEventListener('click', function(event) {
            event.stopPropagation();
        })
    </script>
<!-- js for product gallery -->
    <script>
        var productImg = document.getElementById("productImg");
        var SmallImg = document.getElementsByClassName("small-img");
        SmallImg[0].onclick = function()
        {
            productImg.src = SmallImg[0].src;
        }

        SmallImg[1].onclick = function()
        {
            productImg.src = SmallImg[1].src;
        }

        SmallImg[2].onclick = function() 
        {
            productImg.src = SmallImg[2].src;
        }
        SmallImg[3].onclick = function() 
        {
            productImg.src = SmallImg[3].src;
        }
    </script>

    <!-- sticky -->
    <script>
        window.onscroll = function() {myFunction()};
        
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
</body>
</html>