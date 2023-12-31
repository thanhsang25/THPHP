<header class="header">
    <div class="grid">
        <nav class="header__navbar ">
            <ul class="header__navbar-list">
                <li class="header__navbar-item header__navbar-item--has-qr header__navbar-item--separate ">
                    Email:thanhsang25@gmail.com
                </li>
                <li class="header__navbar-item ">
                    <span class="header__navbar-title--no-pointer "> Liên kết</span>
                    <a href="" class="header__navbar-icon-link ">
                        <i class="header__navbar-icon fa-brands fa-facebook"></i>
                    </a>
                    <a href="" class="header__navbar-icon-link ">
                        <i class="header__navbar-icon fa-brands fa-instagram"></i>
                    </a>
                </li>

            </ul>
            <ul class="header__navbar-list">
                <?php if (isset($_SESSION['user']) && $_SESSION['user']['role']==0 ) {
                ?>
                    <li class="header__navbar-item ">
                        <i class="fa-solid fa-user navbar-admin-icon header__navbar-item-icon"></i>
                        <?php echo $_SESSION['user']['fullname'] ?>
                    </li>
                    <li class="header__navbar-item"> <a class="header__navbar-item-logout" href="index.php?logout">Đăng xuất</a></li>
                <?php
                } else { ?>
                    <li class="header__navbar-item header__navbar-item--bold  header__navbar-item--separate">
                        <a href="./admin/login.php" class="header__navbar-item-register">Đăng nhập</a>
                    </li>
                    <li class="header__navbar-item header__navbar-item--bold">
                        <a href="./admin/register.php" class="header__navbar-item-register">Đăng kí</a>
                    </li>
                <?php } ?>

            </ul>
        </nav>
        <!-- Header Search -->
        <div class="header-with-search">
            <div class="header__logo">
                <a href="" class="header__logo-link">
                    <img src="./assets/img/logo1.png" alt="" class="header__logo-img">
                </a>
            </div>

            <div class="header__search">

                <div class="header__search-wrap">
                    <form action="index.php?quanli=searchproduct" class="header__search-form" method="get">
                        <input type="text" class="header__search-input" placeholder="Tìm kiếm sản phẩm" name="nameproduct" value="<?php echo $_GET['nameproduct']??''; ?>">
                        <!-- Search History -->
                        <div class="header__search-history">
                            <h3 class="header__search-history-heading">Lịch sử tìm kiếm</h3>
                            <ul class="header__search-history-list">
                                <li class="header__search-history-item">
                                    <a href="">Nước tẩy trang</a>
                                </li>
                            </ul>
                        </div>
                        <button class="header__search-btn" name="search" type="submit">
                            <i class="header__search-btn-icon fa-solid fa-magnifying-glass"></i>
                        </button>
                        <input type="hidden" name="quanli" value="searchproduct">
                    </form>
                </div>


            </div>

            <!-- Cart Layout -->
            <div class="header__cart">
                <a href="index.php?quanli=cart" class="header__cart-link">
                    <div class="header__cart-warp">
                        <i class="header__cart-icon fa-sharp fa-solid fa-cart-shopping"></i>
                        <?php
                        $i = 0;
                        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $cart_item) {

                                $i++;
                        ?>
                                <span class="header__cart-notice"><?php echo $i ?></span>
                        <?php }
                        } ?>
                        <!-- Has cart: header __list--no-cart -->
                        <div class="header__cart-list">
                            <h4 class="header__cart-heading">Sản phẩm đã thêm</h4>
                            <ul class="header__cart-list-item">
                                <?php if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                                    foreach ($_SESSION['cart'] as $cart_item) {
                                ?>
                                        <!-- cart item -->
                                        <li class="header__cart-item">
                                            <img src="admin/module/quanlisanpham/upload/<?php echo $cart_item['picture'] ?>" alt="" class="header__cart-img">
                                            <div class="header__cart-item-info">
                                                <div class="header__cart-item-head">
                                                    <h5 class="header__cart-item-name"><?php echo $cart_item['nameproduct'] ?></h5>
                                                    <div class="header__cart-item-price-wrap">
                                                        <span class="header__cart-item-price"><?php echo number_format($cart_item['priceproduct'], 0, ',', '.') ?>VNĐ</span>
                                                        <span class="header__cart-item-multiply">x</span>
                                                        <span class="header__cart-item-quality"><?php echo $cart_item['quantity'] ?></span>
                                                    </div>
                                                </div>
                                                <div class="header__cart-item-body">
                                                    <span class="header__cart-item-description">Phân loại : Linh kiện</span>
                                                    <a href="view/menu/addcart.php?delete=<?php echo $cart_item['id_product'] ?>"><span class="header__cart-item-remove">Xóa</span></a>
                                                </div>
                                            </div>

                                        </li>

                                    <?php
                                    } ?><a href="index.php?quanli=cart" class="header__cart-view-cart btn btn--primary">Xem giỏ hàng</a>
                                <?php
                                } else { ?>
                            </ul>
                            <img src="assets/img/nocart.png" alt="" class="header__cart--no-cart-img">
                            <span class="header__cart--no-cart-msg">
                                Chưa có sản phẩm
                            </span>
                        <?php } ?>
                        </div>
                    </div>
                </a>


            </div>
        </div>
    </div>


</header>