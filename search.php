<?php
    session_start();
    ob_start();
    require_once ('db/dbhelper.php');

    $sql = "SELECT * FROM sanpham inner join category on category.id = sanpham.category_id inner join color on sanpham.color = color.id ";
    $where = "";
    // Tim kiem
    if(isset($_POST['search']) && $_POST['search'] != '') {
        $content = $_POST['search'];
        if ($where == "" ){
            $where .= "WHERE sanpham.TenSP like '%$content%'";
        }else 
        {
            $where .= " and sanpham.TenSP like '%$content%'";
        }
    }

    // Loc theo mau
    
    if(isset($_POST['colorFilter']) && $_POST['colorFilter'] != '') {
        $filter = $_POST['colorFilter'];
        if ($where == "" ){
            $where .= "WHERE color.name like '$filter'";
        } else 
        {
            $where .= " and color.name like '%$filter%'";
        }
    }

    // Loc theo gia
    if(isset($_POST['min-price']) && isset($_POST['max-price']) && $_POST['min-price'] != '' && $_POST['max-price'] != '') {
        $minPrice = $_POST['min-price'];
        $maxPrice = $_POST['max-price'];
        if ($where == "" ){
            $where .= "WHERE sanpham.GiaSP BETWEEN '$minPrice' and '$maxPrice' order by GiaSP";
        } else 
        {
            $where .= " and sanpham.GiaSP BETWEEN '$minPrice' and '$maxPrice' order by GiaSP";
        }
    }

    $sql .= $where;
    $productList = executeResult($sql);
    $_SESSION['productList'] = $productList;

   
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



      

