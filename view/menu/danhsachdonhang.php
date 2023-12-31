<?php
if (isset($_SESSION['user'])){
    $id_user = $_SESSION ['user']['id_user'];
$sql = "SELECT * FROM tbl_order,tbl_admin WHERE tbl_admin.id_user = '$id_user' and tbl_order.id_user = '$id_user' ORDER BY orderdate ASC";
$query = mysqli_query($mysqli, $sql);

?>


<h3 class="section-header">Danh sách đơn hàng</h3>

<table class="custom-table list-table" border="1">
    <form method="POST" action="module/quanlidanhmuc/xuly.php">
        <tr>
            <th>Id</th>
            <th>Tên khách hàng</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>SĐT</th>
            <th>Mã đơn hàng</th>
            <th>Ngày mua</th>
            <th>Thành Tiền</th>
        </tr>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_assoc($query)) {
            $i++;
        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['fullname'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['phone'] ?></td>
                <td><?php echo $row['ordercode'] ?></td>
                <td><?php echo $row['orderdate'] ?></td>
                <td><?php echo number_format($row['total'], 0, ',', '.') ?>VNĐ</td>
                <td><strong><?php
                    if ($row['status'] == 0)  echo 'Đơn hàng mới';
                    elseif ($row['status'] == 1) echo 'Đã xử lý';
                ?></strong></td>
            </tr>
        <?php
        }
        ?>
    </form>
</table>
<?php }else
header('Location:admin/login.php');
?>