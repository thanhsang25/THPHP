<?php
$sql_lietke_danhmucsp = "SELECT * FROM tbl_product,tbl_category WHERE tbl_product.id_category = tbl_category.id_category ORDER BY id_product DESC LIMIT  5";
$query_new_product =  mysqli_query($mysqli, $sql_lietke_danhmucsp);
?>
<div class="home__container">
    <div class="grid">
        <div class="home__container-banner">
            <img src="assets/img/Banner-gaming_laptops.jpg" alt="" class="home__container-banner-img">
        </div>
        <h3 class="home__container-heading">SẢN PHẨM MỚI NHẤT</h3>
        <div class="grid__row">
            <?php
            while ($row_product = mysqli_fetch_array($query_new_product)) {
            ?>
                <div class="grid__column-sp-home">
                    <div class="home-product">
                        <a class="home-product__link" href="index.php?quanli=detailproduct&idproduct=<?php echo $row_product['id_product'] ?>">
                            <img src="admin/module/quanlisanpham/upload/<?php echo $row_product['picture'] ?>" alt="" class="home-product__img">
                            <div class="home-product__description">
                                <h4 class="home-product__heading"> <?php echo $row_product['nameproduct'] ?>
                                </h4>
                                <p class="description-product"><?php echo $row_product['summary'] ?> </p>
                                <p class="home-product__price">Giá: <?php echo number_format($row_product['priceproduct'], 0, ',', '.') ?>VNĐ</p>
                            </div>
                        </a>
                        <p class="namecategory">Danh mục: <?php echo $row_product['namecategory'] ?></p>
                        <button class="home-product__btn btn btn--primary"  >
                            <i class="fa-solid fa-bag-shopping home-product__icon"></i>
                            Mua ngay
                        </button>


                    </div>
                </div>
            <?php
            }

            ?>

        </div>

    </div>
</div>