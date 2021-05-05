<div class="header">
    <div class="container">
        <?php require_once 'view/masster/menu.php'; ?>
        <div class="row">
            <div class="col-2">
                <h1>Cửa hàng Quang Đăng<br> Đồng hồ thời trang</h1>
                <p>Chào mừng bạn đến với cửa hàng của chúng tôi. Đến với chúng tôi là một lựa chọn Tốt nhất. <br> </p>
                <a href="" class="btn">Khám phá ngay &#8594;</a>
            </div>
            <div class="col-2">
                <img src="images/image1.png">
            </div>
        </div>
    </div>
</div>

<!-- ------------- featured categorries ---------------- -->
<div class="categories">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <img src="images/category-1.jpg">
            </div>
            <div class="col-3">
                <img src="images/category-2.jpg">
            </div>
            <div class="col-3">
                <img src="images/category-3.jpg">
            </div>

        </div>
    </div>

</div>
<!-- ------------- featured products ---------------- -->
<div class="small-container">
    <h2 class="title">Sản phẩm nổi bật</h2>
    <div class="row">
        <?php 
        $ds = $db->List();
        foreach ($ds as $value) {
                    # code...
            
            ?>
            <div class="col-4">
                <a href="products_detal.php?id=<?php echo $value["idsp"]; ?>"><img src="images/<?php echo $value["hinhanhsp"]; ?>" ></a>
                <a href="products_detal.php?id=<?php echo $value["idsp"]; ?>"><h4><?php echo $value["tensp"]; ?></h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p><?php echo number_format(($value['gia']*((100-$value['khuyenmai1'])/100)),0,",",".");?> đ</p>
            </div>
            <?php 
        }
        ?>
    </div>
    <h2 class="title">Sản phẩm mới nhất</h2>
    <div class="row">
        <div class="col-4">
            <img src="images/product-8.jpg">
            <h4>Red Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>                    
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>

            </div>
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="images/product-9.jpg">
            <h4>Red Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="images/product-7.jpg">
            <h4>Red Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="images/product-8.jpg">
            <h4>Red Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$50.00</p>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="images/product-9.jpg">
            <h4>Red Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="images/product-10.jpg">
            <h4>Red Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="images/product-11.jpg">
            <h4>Red Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="images/product-12.jpg">
            <h4>Red Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$50.00</p>
        </div>
    </div>
</div>
<!-- ------------ offer -------------- -->
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2"><img src="images/exclusive.png" class="offer-img"> </div>
            <div class="col-2">
                <p>Có sẵn độc quyền trên RedStore</p>
                <h1>Băng thông minh 4</h1>
                <small>
                Mi Smart Band 4 có màn hình cảm ứng màu AMOLED lớn hơn 39,9% (so với Mi Band 4) với độ sáng có thể điều chỉnh, vì vậy mọi thứ đều rõ ràng nhất có thể</small>
                <a href="" class="btn">Mua ngay &#8594;</a>
            </div>
        </div>
    </div>
</div>
<!-- ------------ testimonial -------------- -->
<?php include 'view/testimonial.php'; ?>
<!-- ------------------- brands --------------------- -->
<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="images/logo-godrej.png">
            </div>
            <div class="col-5">
                <img src="images/logo-oppo.png">
            </div>
            <div class="col-5">
                <img src="images/logo-coca-cola.png">
            </div>
            <div class="col-5">
                <img src="images/logo-paypal.png">
            </div>
            <div class="col-5">
                <img src="images/logo-philips.png">
            </div>
        </div>
    </div>
</div>