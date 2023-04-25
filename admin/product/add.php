<?php
require_once ('../../db/dbhelper.php');

$id = $TenSP = $HinhSP = $GiaSP = $MoTaSP = $category_id = '';
// thêm sp
if (!empty($_POST)) {
	if (isset($_POST['TenSP'])) {
		$TenSP = $_POST['TenSP'];
	}
	if (isset($_POST['id'])) {
		$id = $_POST['id'];
	}
	if (isset($_POST['HinhSP'])) {
		$HinhSP = $_POST['HinhSP'];
	}
	if (isset($_POST['id_category'])) {
		$category_id = $_POST['id_category'];
	}
	if (isset($_POST['GiaSP'])) {
		$GiaSP = $_POST['GiaSP'];
	}
	if (isset($_POST['content'])) {
		$MoTaSP = $_POST['content'];
	}

	if (!empty($TenSP)) {
		$created_at = $updated_at = date('Y-m-d H:s:i');
		//Luu vao database
		if ($id == '') {
			$sql = 'insert into sanpham(TenSP,HinhSP ,MoTaSP, GiaSP, category_id, created_at, updated_at) 
			values ("'.$TenSP.'","'.$HinhSP.'","'.$MoTaSP.'","'.$GiaSP.'","'.$category_id.'" ,"'.$created_at.'", "'.$updated_at.'")';
 
		} else {
			$sql = 'update sanpham set TenSP = "'.$TenSP.'", updated_at = "'.$updated_at.'", HinhSP = "'.$HinhSP.'",
			GiaSP = "'.$GiaSP.'", MoTaSP = "'.$MoTaSP.'", category_id = '.$category_id.'
			where id = '.$id;
		}
		execute($sql);
		header('Location: index.php');
		die();
		
		
	}
}
// sửa sp
if (isset($_GET['id'])) { // lấy ra sản phẩm click vào
	$id       = $_GET['id'];
	$sql      = 'select * from sanpham where id = '.$id;
	$product = executeSingleResult($sql);
	if ($product != null) {
		$TenSP = $product['TenSP'];
		$HinhSP = $product['HinhSP'];
		$MoTaSP = $product['MoTaSP'];
		$GiaSP = $product['GiaSP'];
		$category_id = $product['category_id'];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thêm/Sửa Danh Mục Sản Phẩm</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<ul class="nav nav-tabs">
	  <li class="nav-item">
	    <a class="nav-link" href="index.php">Quản Lý Danh Mục</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="../product/">Quản Lý Sản Phẩm</a>
	  </li>
	</ul>

	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Thêm/Sửa Sản Phẩm</h2>
			</div>
			<div class="panel-body">
				<form method="post" action="add.php">
					<div class="form-group">
					  <label for="name">Tên sản phẩm:</label>
					  <input type="text" name="id" value="<?=$id?>" hidden="true">
					  <input required="true" type="text" class="form-control" id="TenSP" name="TenSP" value ="<?=$TenSP?>">
					</div>
					<div class="form-group">
					  <label for="name">Danh mục:</label>
					  <select class="form-control" id="id_category" name="id_category">
						<option value="-1">-- Lựa chọn danh mục</option>
						<?php
						$sql = 'select * from category';
						$categoryList = executeResult($sql);
						foreach ($categoryList as $item) {
							if ($category_id == $item['id'] ) {
								echo '<option selected value="'.$item['id'].'">'.$item['name'].'</option>';
							}else {
								echo '<option value="'.$item['id'].'">'.$item['name'].'</option>';
							}
						}
						?>
					  </select>
					</div>
					<div class="form-group">
					  <label for="name">Giá bán:</label>
					  <input required="true" type="text" class="form-control" id="GiaSP" name="GiaSP" value="<?=$GiaSP?>">
					</div>
					<div class="form-group">
					  <label for="name">Hình Sản Phẩm:</label>
					  <input required="true" type="text" class="form-control" id="HinhSP" name="HinhSP" value="<?=$HinhSP?>"">
					</div>
					<div class="form-group">
					  <label for="name">Nội dung:</label>
					  <textarea name="content" class="form-control" id="content"  rows="5"><?=$MoTaSP?></textarea>
					</div>
					<button class="btn btn-success">Lưu</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>