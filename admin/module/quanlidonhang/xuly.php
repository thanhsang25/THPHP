<style>
        p.p_1{
     background-color: #d4edda;
    border-color: #c3e6cb;
    color: green;
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
        }
        
    </style>
<?php

// Giả sử bạn có một hàm để lấy chi tiết đơn hàng theo ID đơn hàng
function getChiTietDonHangTheoId($order_id, $mysqli)
{
    $sql = "SELECT * FROM tbl_order WHERE id_order = $order_id";
    $result = mysqli_query($mysqli, $sql);

    if ($result) {
        return mysqli_fetch_assoc($result);
    } else {
        return false;
    }
}
// Kiểm tra nếu tham số hủy đơn hàng được đặt trong URL
if (isset($_GET['query']) && $_GET['query'] == 'delete') {
    if (isset($_GET['id'])) {
        $order_id_to_cancel = $_GET['id'];
        // Lấy chi tiết đơn hàng theo ID đơn hàng
        $orderDetails = getChiTietDonHangTheoId($order_id_to_cancel, $mysqli);
        if ($orderDetails) {
            // Xóa chi tiết đơn hàng từ tbl_orderdetail
            $sql_xoa_details = "DELETE FROM tbl_orderdetail WHERE ordercode = '{$orderDetails['ordercode']}'";
            $result_xoa_details = mysqli_query($mysqli, $sql_xoa_details);
            

            if ($result_xoa_details) {
                // Xóa đơn hàng từ tbl_order
                $sql_xoa_don_hang = "DELETE FROM tbl_order WHERE id_order = $order_id_to_cancel";
                $result_xoa_don_hang = mysqli_query($mysqli, $sql_xoa_don_hang);

                if ($result_xoa_don_hang) {
                    // Hiển thị thông báo thành công hoặc chuyển hướng đến trang thành công
                    echo '<p class ="p_1">Bạn đã hủy đơn hàng thành công!</p>';
                    exit;
                } else {
                    // Xử lý lỗi khi xóa đơn hàng
                    echo "Lỗi khi hủy đơn hàng. Vui lòng thử lại!";
                }
            } else {
                // Xử lý lỗi khi xóa chi tiết đơn hàng
                echo "Lỗi khi hủy đơn hàng. Vui lòng thử lại!";
            }
        } else {
            // Xử lý lỗi khi không tìm thấy chi tiết đơn hàng
            echo '<p class ="p_1">Không tìm thấy thông tin đơn hàng!</p>';
        }
        
    }
}
    if (isset($_GET['query']) && $_GET['query'] == 'edit') {
        if (isset($_GET['ordercode'])) {
            $ordercode = $_GET['ordercode'];
            $sql = "UPDATE tbl_order SET status = 1 WHERE ordercode = '$ordercode'";
            $result = mysqli_query($mysqli, $sql);
    ?>
            <script>
                window.history.back();
            </script>
    <?php
        }
    }
    ?>
   