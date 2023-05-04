    <?php
        session_start();
        ob_start();
        require_once ('db/dbhelper.php');
        

        $sql = "SELECT * FROM sanpham ";
        $where = "";
        // Tim kiem
        if(isset($_POST['search']) && $_POST['search'] != '') {
            $content = $_POST['search'];
            if ($where == ""){
                $where .= "WHERE sanpham.TenSP like '%$content%'";
            }else
            {
                $where .= " and sanpham.TenSP like '%$content%'";
            }
        }

        // Loc theo mau
        if(isset($_POST['categoryFilter']) && $_POST['categoryFilter'] != '') {
            $filter = $_POST['categoryFilter'];
            if ($where == ""){
                $where .= "WHERE sanpham.category_id = '$filter'";
            } else 
            {
                $where .= " and sanpham.category_id = '$filter'";
            }
        }

        // Loc theo gia
        if(isset($_POST['min_price']) && isset($_POST['max_price']) && $_POST['min_price'] != '' && $_POST['max_price'] != '') {
            $minPrice = $_POST['min_price'];
            $maxPrice = $_POST['max_price'];
            if ($where == "" ){
                $where .= "WHERE sanpham.GiaSP BETWEEN '$minPrice' and '$maxPrice' order by GiaSP";
            } else 
            {
                $where .= " and sanpham.GiaSP BETWEEN '$minPrice' and '$maxPrice' order by GiaSP";
            }
        }



        $sql .= $where;
        if ($where != "") {
            $productList = executeResult($sql);
        }
        if(empty($productList)) {
            ?>
                <div class="row"> 
                    <h1 style="color: #ccc; text-align:center;">Không tìm thấy sản phẩm</h1>
                </div>
            <?php
        }else {
        if (count($productList) > 0) {
            $soSP = count($productList);
            $countPerRow = 0;
            $s = ""; // biến s để nối chuỗi html
            foreach ($productList as $row) {
                if ($countPerRow == 0) {
                    // new row 
                    $s .= '<div class="row">';
                }
                if ($countPerRow <= 2) {
                    if ($row) {
                        $countPerRow++;
                        $s .= '<li class="search-item col-2">';
                        $s .= sprintf('<div class="search-item__info">
                            <div class="search-item-img">
                                <img src="%s" alt="">
                            </div>
                        <div class="overview">
                            <p class="overview_title">%s</p>'
                            , $row['HinhSP'], $row['TenSP'],
                        );
                        $s .= sprintf('<p>%s VND</p>', number_format($row['GiaSP'], 0, '', ','));
                        $s .= sprintf(
                            '</div>
                                <span class="search-item-icon"><a href="./product-details.php?id=%s"><i class="ti-plus"></i></a></span>
                                </div>  
                            </li>',$row['ID'] 
                        );
                    }
                }
                if ($countPerRow > 1) {
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
        }
    
    ?>