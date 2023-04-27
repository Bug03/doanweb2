<?php

if (empty($_POST["name"])) {
    die("Yêu cầu nhập tên của bạn");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Yêu cầu nhập email của bạn");
}

if (strlen($_POST["password"]) < 8) {
    die("Mật khẩu phải chứa ít nhất 8 ký tự");
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("Mật khẩu phải chứa ít nhất 1 chữ cái");
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("Mật khẩu phải chứa ít nhất 1 chữ số");
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    die("Mật khẩu chưa chính xác");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require (__DIR__ . '/database.php');

$sql = "INSERT INTO user (name, email, password_hash,role_id)
        VALUES (?, ?, ?,1)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sss",
                  $_POST["name"],
                  $_POST["email"],
                  $password_hash);
                  
if ($stmt->execute()) {

    header("Location: dkythanhcong.php");
    exit;
    
} else {
    
    if ($mysqli->errno === 1062) {
        die("Email này đã được sử dụng");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}
