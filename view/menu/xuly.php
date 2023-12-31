<?php
include('../../admin/config/config.php');
$name = $_POST['name'];
$email = $_POST['email'];
$content = $_POST['content'];
if (isset($_POST['addcontract'])) {
    $ngaythem=date('Y-m-d');
    $sql_add = "INSERT INTO tbl_contract(name,email,content,ngaythem) VALUE('".$name."','".$email."','".$content."','".$ngaythem."')";
    mysqli_query($mysqli, $sql_add);
    header('Location:../../index.php?quanli=contact');
    exit();
}
?>