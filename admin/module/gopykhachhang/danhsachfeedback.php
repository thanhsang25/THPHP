<?php
$sql_fb = "SELECT * FROM tbl_contract order by ngaythem ASC ";
$query_fb =  mysqli_query($mysqli, $sql_fb);
?>
<h3 class="section-header">Danh sách feed back</h3>
<table class="custom-table list-table" border="1">
    <form method="POST" action="module/gopykhachhang/danhsachfeedback.php">
        <tr>
            <th>Tên</th>
            <th>Email</th>
            <th>nội dung</th>
            <th>ngày feed back</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($query_fb)) {
        ?>
        <tr>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['content']?></td>
            <td><?php echo $row['ngaythem']?></td>
        </tr>
        <?php 
            }
        ?>
    </form>
</table>