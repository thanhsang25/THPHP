<?php
$sql = "SELECT * FROM tbl_orderdetail WHERE tbl_orderdetail.ordercode = '" . $_GET['ordercode'] . "'";
$query = mysqli_query($mysqli, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết đơn hàng</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            color: white;
        }

        th {
            background-color: #f2f2f2;
            color: black;
        }
        td {
    color: white;
}
.h2_h2{
    color: white;
}
    </style>
</head>
<body>

<h2 class="h2_h2">Chi tiết đơn hàng</h2>

<table>
    <tr>
        <th>STT</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
    </tr>

    <?php
    $stt = 1;
    while ($row = mysqli_fetch_assoc($query)) {
        $product_id = $row['id_product'];
        $quantity = $row['quantityproduct'];
        $price = $row['priceproduct'];

        // Lấy thông tin sản phẩm từ bảng tbl_product (giả sử có bảng này)
        $product_sql = "SELECT nameproduct FROM tbl_product WHERE id_product = '$product_id'";
        $product_query = mysqli_query($mysqli, $product_sql);
        $product_info = mysqli_fetch_assoc($product_query);
        $product_name = $product_info['nameproduct'];

        echo "<tr>";
        echo "<td>$stt</td>";
        echo "<td>$product_name</td>";
        echo "<td>$quantity</td>";
        echo "<td>$price</td>";
        echo "</tr>";
        $stt++;
    }
    ?>

</table>

</body>
</html>
