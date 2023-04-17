<?php
    include 'header.php'
?>
<body>
        <!-- cart items details -->
           
        
        <div class="container cart-page">
            <div class="cart-wrap">
                <h2 class="products-title cart-title">GIỎ HÀNG</h2>
                <table>
                    <div class="ordered">
                        <h3 class="ordered-title">ĐƠN HÀNG ĐÃ ĐẶT</h3>
                        <div class="ordered-content">
                            <div>
                                <p>1x Cream Essential Slipper size 43;</p>
                            </div>
                            <div>
                                <p> 200.000 VND</p>
                            </div>
                            <div>
                                <p>25/11/2022</p>
                            </div>
                            <div>
                                <p style="color: red ;">Chưa xử lý</p>
                            </div>
                        </div>
                        <div class="ordered-content">
                            <div>
                                <p>1x Black Doraemon Tee size XL;</p>
                            </div>
                            <div>
                                <p> 300.000 VND</p>
                            </div>
                            <div>
                                <p>3/11/2022</p>
                            </div>
                            <div>
                                <p>Đã xử lý</p>
                            </div>
                        </div>         
                    </div>
                    <h3 class="ordered-title" style="margin-bottom: 20px">ĐƠN HÀNG</h3>
                    <tr>
                        <th>Sản Phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Tổng tiền</th>
                        <th>Xóa</th>
                    </tr>
                    <tr>
                        <td>
                            <div class="cart-info">
                                <img src="./assest/images/tên spham-màu nha/Outerwear/Crocodile Sweater _ Green.png" alt="">
                                <div style="margin-top: 20px ;">
                                    <p>Green Crocodile Sweater</p>
                                    <small>size: XL</small>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p>300.000 VND</p>
                        </td>
                        <td><input type="number" value = "1" min="0"></td>
                        <td>300.000 VND</td>
                        <td><div href="" class="js-search"><i class="fa-regular fa-trash-can cart-trash"></i></div></td> 
                    </tr>
                    <tr>
                        <td>
                            <div class="cart-info">
                                <img src="./assest/images/tên spham-màu nha/Quần nè/Straight Pants _ Black.png" alt="">
                                <div style="margin-top: 20px ;">
                                    <p>Black Straight Pants</p>
                                    <small>size: L</small>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p>350.000 VND</p>
                        </td>
                        <td><input type="number" value = "1" min="0"></td>
                        <td>700.000 VND</td>
                        <td><div href="" class="js-search"><i class="fa-regular fa-trash-can cart-trash"></i></div></td> 
                    </tr>
                    <tr>
                        <td>
                            <div class="cart-info">
                                <img src="./assest/images/tên spham-màu nha/Dép/Essential Slipper _ Green.png" alt="">
                                <div style="margin-top: 20px ;">
                                    <p>Green Essential Slipper</p>
                                    <small>size: 43</small>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p>300.000 VND</p>
                        </td>
                        <td><input type="number" value = "1" min="0"></td>
                        <td>900.000 VND</td>
                        <td><div href="" class="js-search"><i class="fa-regular fa-trash-can cart-trash"></i></div></td>  
                    </tr>
                </table>
                <div class="cart-total">
                    <p>Thành tiền: 1.900.000 VND</p>
                </div>
                    <div href="" class="cart-btn--remove btn js-search">Xóa tất cả</div>
                    <a href="" class="cart-btn--pay btn">Thanh toán</a>
            
                
            </div>

        </div>





    <!-- Footer -->

   <?php
   include 'footer.php'
   ?>
    <!-- modal -->
    <div class="modal js-modal">
        <div class="modal-container js-modal-container">
            <header class="modal-header">
                <h3 class="modal-title">Bạn có chắc chắn muốn xóa sản phẩm</h3>
            </header>
            <div class="modal-body">
                <div class="search-extend" style="justify-content:space-evenly ;">
                    <div class="js-modal-close">
                        <div class="cart-btn--remove btn" onclick="hideSearch()">Quay lại</div>
                    </div>
                        <a href="#" class="cart-btn--pay btn" onclick="showSuccessToast(); hideSearch();">Xác nhận</a>
                </div>
            </div>   
        </div>
    </div>
    <div id="toast">

    </div>
    <script src="../assest/js/toast.js"></script>
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
        <!-- modal search jaavascript -->
<script>
    const buyBtn = document.querySelectorAll('.js-search');
    const modal = document.querySelector('.js-modal');
    const modalContainer = document.querySelector('.js-modal-container')
    const modalClose = document.querySelector('.js-modal-close')
    function showSearch() {
        modal.classList.add('open');
    }
    function hideSearch() {
        modal.classList.remove('open');
    }

    buyBtn[0].addEventListener('click',showSearch);
    buyBtn[1].addEventListener('click',showSearch);
    buyBtn[2].addEventListener('click',showSearch);
    buyBtn[3].addEventListener('click',showSearch);
    buyBtn[4].addEventListener('click',showSearch);
    buyBtn[5].addEventListener('click',showSearch);
    buyBtn[6].addEventListener('click',showSearch);

    

    modalClose.addEventListener('click',hideSearch);


    modal.addEventListener('click',hideSearch);

    modalContainer.addEventListener('click', function(event) {
        event.stopPropagation();
    })
</script>
 <!-- toast -->
 <script>
    function showSuccessToast() {
      toast({
        title: "Thành công!",
        message: "Bạn đã xóa thành công",
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