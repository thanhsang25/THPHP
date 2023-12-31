<?php
ob_start();
session_start();
if (isset($_GET['logout'])) {
    unset($_SESSION['user']);
    header('Location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/font/fontawesome-free-6.4.2-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/custom.js">

</head>

<body>
    <div class="wrapper">
        <?php
        include('admin/config/config.php');
        include("view/header.php");
        include("view/menu.php");
        include("view/main.php");
        include("view/footer.php");
        ?>
    </div>
</body>

</html>