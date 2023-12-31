<?php
if (isset($_GET['action']) && $_GET['query']) {
   $flag = $_GET['action'];
   $query = $_GET['query'];
} else {
   $flag = '';
   $query = '';
}
if ($flag == 'quanlidanhmucsanpham' && $query == 'add') {
   include('module/quanlidanhmuc/them.php');
   include('module/quanlidanhmuc/lietke.php');
} elseif ($flag == 'quanlidanhmucsanpham' && $query == 'edit') {
   include('module/quanlidanhmuc/sua.php');
} elseif ($flag == 'quanlisanpham' && $query == 'add') {
   include('module/quanlisanpham/them.php');
   include('module/quanlisanpham/lietke.php');
} elseif ($flag == 'quanlisanpham' && $query == 'edit') {
   include('module/quanlisanpham/sua.php');
} elseif ($flag == 'quanlidonhang' && $query == 'add') {
   include('module/quanlidonhang/listorder.php');
} elseif ($flag == 'quanlidonhang' && $query == 'view') {
   include('module/quanlidonhang/orderdetail.php');
} elseif ($flag == 'quanlidonhang' && $query == 'delete') {
   include('module/quanlidonhang/xuly.php');
} elseif ($flag == 'quanlidonhang' && $query == 'edit') {
   include('module/quanlidonhang/xuly.php');
}elseif ($flag == 'gopykhachhang'&& $query == 'view' ) {
   include('module/gopykhachhang/danhsachfeedback.php');
}
 else {
   include('module/dashboard.php');
}
