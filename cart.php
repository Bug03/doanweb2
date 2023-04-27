<?php
session_start();
ob_start();
include 'header.php';
require_once('db/dbhelper.php');



if (isset($_POST['submit'])) {

}


?>

<head>
    <link rel="stylesheet" href="./assest/css/cart.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>

    <!-- cart items details -->


    <div class="container cart-page">
        <div class="cart-wrap">
            <h2 class="products-title cart-title">GIỎ HÀNG</h2>
            <form action="order.php " method="post">
                <table>
                    <h3 class="products-title-small" style="margin-bottom: 20px">ĐƠN HÀNG</h3>
                    <tr class="cart-table-title">
                        <th style="text-align:left;">Sản Phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Tổng tiền</th>
                        <th></th>
                    </tr>
                    <?php
                    // print_r($_SESSION['carts']);
                    $_SESSION['sum-price'] = 0;
                    if (isset($_SESSION['carts']) && !empty($_SESSION['carts'])) {
                        foreach ($_SESSION['carts'] as $item) { ?>
                            <tr>
                                <td>
                                    <div class="cart-product-inf">
                                        <img src="<?= $item['HinhSP'] ?>" alt="" style="width:100px;">
                                        <span>
                                            <?= $item['TenSP'] ?>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <p class="cart-price">
                                        <?= number_format($item['GiaSP']) . " VND" ?>
                                    </p>
                                </td>
                                <td>
                                    <input type="hidden" name="">
                                    <div class="buttons_added">
                                        <input class="minus is-form" type="button" value="-">
                                        <input aria-label="quantity" class="input-qty" max="10" min="0" type="number"
                                            value="<?= $item['qty'] ?>" name="qty[<?= $item['ID'] ?>]">
                                        <input class="plus is-form" type="button" value="+">
                                    </div>
                                </td>
                                <td>
                                    <p class="cart-price">
                                        <?=
                                            $totalPrice = $item['GiaSP'] * $item['qty'];
                                        $_SESSION['sum-price'] += $totalPrice;
                                        number_format($totalPrice) . " VND"
                                            ?>
                                    </p>
                                </td>
                                <td>
                                   <a href="order.php?xoa=<?=$item['ID']?>"> <span class="js-search"><i class="fa-regular fa-trash-can cart-trash"></i></span></a>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </table>
                <div class="row">
                    <div class="col-2">
                        <a href="order.php?xoatatca=1">
                            <button type="button" class="cart-btn">Xóa tất cả</button>
                        </a>
                        <!-- <button type="button" class="cart-btn">Tiếp tục mua sắm</button> -->
                    </div>
                    <div class="col-2">
                        <button type="submit" name="submit" class="cart-btn" style="float:right">Cập nhật giỏ hàng </button>
                    </div>
                </div>
                <div class="cart-checkout">
                    <!-- <h5>Tổng giá tiền</h5> -->
                    <div class="cart-total row">
                        <p style="font-size:25px">Tổng thanh toán: </p>
                        <span>
                            <?= $_SESSION['sum-price'] . " VND" ?>
                        </span>
                    </div>
                    <button type="submit" class="cart-btn cart-btn--checkout"> Thanh Toán </button>
                </div>
                <!-- <div class="cart-total">
                    <p>Thành tiền: 1.900.000 VND</p>
                </div> -->

            </form>
        </div>


    </div>
    <script>
        $('input.input-qty').each(function () {
            var $this = $(this),
                qty = $this.parent().find('.is-form'),
                min = Number($this.attr('min')),
                max = Number($this.attr('max'))
            if (min == 0) {
                var d = 0;
            } else d = min
            $(qty).on('click', function () {
                if ($(this).hasClass('minus')) {
                    if (d > min) d += -1
                } else if ($(this).hasClass('plus')) {
                    var x = Number($this.val()) + 1
                    if (x <= max) d += 1
                }
                $this.attr('value', d).val(d)
            })
        })
    </script>



    <!-- Footer -->

    <?php
    include 'footer.php'
        ?>
</body>

</html>