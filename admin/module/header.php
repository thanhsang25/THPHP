<div class="navbar-admin ">
<i class="fa-solid fa-user navbar-admin-icon"></i>
<p class="navbar-admin-user"><?php if(isset($_SESSION['role'])){
    echo $_SESSION['username'];
}

?></p>
<a class="admin-logout" href="index.php?logout">Đăng xuất</a>
</div>