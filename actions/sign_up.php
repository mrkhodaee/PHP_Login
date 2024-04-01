<?php
require_once('../config/loader.php');

if (isset($_POST['signup'])){
    $username = $_POST['username'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];


$sql = "INSERT INTO Users (username, name, mobile,password) VALUES (?, ?, ?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $username, $name, $mobile, $password);
$stmt->execute();

echo 'ذخیره شد.';
}