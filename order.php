<?php
require_once 'db/dbhelper.php';
session_start();

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $sql = "Select * from sanpham where id = $id";
    $row = executeSingleResult($sql);

    if (!isset($_SESSION['carts']) || empty($_SESSION['carts'])) {
        $_SESSION['carts'][$id] = $row;
        $_SESSION['carts'][$id]['qty'] = 1;
    } else {
        if (array_key_exists($id, $_SESSION['carts'])) {
            $_SESSION['carts'][$id]['qty'] += 1;
        } else {
            $_SESSION['carts'][$id] = $row;
            $_SESSION['carts'][$id]['qty'] = 1;
        }
    }
    $_SESSION['noti_cart'] = 1;
    header("Location:products-shirt.php");
}

if(isset($_POST['submit'])) {
    // print_r($_POST['qty']);
    foreach($_POST['qty'] as $key => $value) {
        if ($value == 0) {
            unset($_SESSION['carts'][$key]);
        }else {
            $_SESSION['carts'][$key]['qty'] = $value;
        }
    }
    header("Location:cart.php");
 }

if (isset($_GET['xoatatca']) && $_GET['xoatatca'] == 1) {
    unset($_SESSION['carts']);
    header('Location:cart.php');
}

if (isset($_GET['xoa'])) {
    unset($_SESSION['carts'] [$_GET['xoa']]);
    header('Location:cart.php');

} 


?>