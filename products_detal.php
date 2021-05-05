<?php 
// require_once 'include/confing.php';
require_once 'Model/sanpham.php'; 

$db_sp = new Sanpham();
$db_sp->Connect();

$titel = "Chi tiết sản phẩm";
include 'view/masster/head.php';

 ?>
    <div class="container">
        <?php include 'view/masster/menu.php'; ?>
    </div>
    </div>

    <!-- ---------- single Products detail ----------- -->
    <?php
    if (isset($_GET['id'])) {
         $id = $_GET['id'];
     } 
    $sp = $db_sp->List_id($id);
    $spa = $db_sp->List_id_ha($id);
    foreach ($sp as $value) {
        # code...
     ?>
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="images/<?php echo $value["hinhanhsp"]; ?>" width="100%" id="productImg">
                <div class="small-img-row">
                    <div class="small-img-rol">
                        <img src="images/<?php echo $value["hinhanhsp"]; ?>" width="100%" class="small-img">
                    </div>
                    <?php 
                    foreach ($spa as $valueha) {
                     ?>
                    <div class="small-img-rol">
                        <img src="images/<?php echo $valueha["urlhinhanh"]; ?>" width="100%" class="small-img">
                    </div>
                    <?php } ?>
                </div>

            </div>
            <div class="col-2">
                <p>Home / T-Shirt</p>
                <h1><?php echo $value["tensp"]; ?></h1>
                <h4><?php echo number_format(($value['gia']*((100-$value['khuyenmai1'])/100)),0,",","."); ?> đ</h4>
                <span>Số Lượng: </span>
                <input type="number" value="1" min="1" max="<?php echo $value["soluong"]; ?>">
                <a href="" class="btn">Thêm vào giỏ hàng</a>
                <h3>Chi tiết sản phẩm
                <i class="fa fa-indent"></i>
                </h3>
                <br>
                <p><?php echo $value["chitietsp"]; ?></p>
            </div>
        </div>
    </div>

    <!-- ----- title------------- -->
    <div class="small-container">
        <div class="row row2">
            <h2>Sản phẩm liên quan
</h2>
            <p>Xem Thêm</p>
        </div>
    </div>
    <?php } ?>
<!-- ---------------Products----------------- -->
    <div class="small-container">

        <div class="row">
            <?php 
                // $sp = $db_sp->List();
                $item_page = !empty($_GET['item_page']) ? $_GET['item_page'] : 4;
                $curres_page = !empty($_GET['curres_page']) ? $_GET['curres_page'] : 1;
                $offset = ($curres_page - 1) * $item_page;
                $sp = $db_sp->List_PT($item_page, $offset);

                //var_dump($sp);

                $danhsach_sp = $db_sp->Num_rows();
                $tong_sp = $danhsach_sp -> num_rows;
                $tong_page = ceil($tong_sp/$item_page);

                foreach ($sp as $value) {
             ?>
            <div class="col-4">
                <a href="products_detal.php?id=<?php echo $value["idsp"] ?>"><img src="images/<?php echo $value["hinhanhsp"] ?>"></a>
                <a href="products_detal.php?id=<?php echo $value["idsp"] ?>"><h4><?php echo $value["tensp"] ?></h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p><?php echo number_format(($value['gia']*((100-$value['khuyenmai1'])/100)),0,",","."); ?> đ</p>
            </div>
            <?php } ?>
        </div>
        <div class="page-btn">
            <!-- Ve dau -->
            <?php if ($curres_page > 3) {
                $trangdau = 1;
                ?>
                <a href="products_detal.php?id=<?php echo $value["idsp"] ?>&item_page=<?= $item_page; ?>&curres_page=<?= $trangdau; ?>"><span><<</span></a>
            <?php } ?>
            <!-- prev -->
            <?php if ($curres_page > 1) {
                $prev = $curres_page - 1;
                ?>
                <a href="products_detal.php?id=<?php echo $value["idsp"] ?>&item_page=<?= $item_page; ?>&curres_page=<?= $prev; ?>"><span><</span></a>
            <?php } ?>
            <!-- giua -->
            <?php for ($i=1; $i <= $tong_page; $i++) { ?>
                <?php if ($i != $curres_page) { ?>
                    <?php if ($i > $curres_page - 3 && $i < $curres_page +3) { ?>
                        <a href="products_detal.php?id=<?php echo $value["idsp"] ?>&item_page=<?= $item_page; ?>&curres_page=<?= $i; ?>"><span><?= $i; ?></span></a>
                    <?php } ?>
                <?php }else { ?>
                    <span style="background: #ff523b;"><?= $i; ?></span>
                <?php } ?>
            <?php } ?>
            <!-- next &#8594; -->
            <?php if ($curres_page < $tong_page - 1) {
                $next = $curres_page + 1;
                ?>
                <a href="products_detal.php?id=<?php echo $value["idsp"] ?>&item_page=<?= $item_page; ?>&curres_page=<?= $next; ?>"><span>></span></a>
            <?php } ?>
            <!-- cuoi -->
            <?php if ($curres_page < $tong_page - 3) {
                $trangcuoi = $tong_page;
                ?>
                <a href="products_detal.php?id=<?php echo $value["idsp"] ?>&item_page=<?= $item_page; ?>&curres_page=<?= $trangcuoi; ?>"><span>>></span></a>
            <?php } ?>
        </div>
    </div>
    <!-- ------------footer----------- -->



<!-- ------------------- JS for  product gallery------------------------         -->
        <script>
            var ProductImg = document.getElementById("productImg");
            var SmallImg = document.getElementsByClassName("small-img");

            SmallImg[0].onclick = function()
            {
                ProductImg.src = SmallImg[0].src;
            }
            SmallImg[1].onclick = function()
            {
                ProductImg.src = SmallImg[1].src;
            }
            SmallImg[2].onclick = function()
            {
                ProductImg.src = SmallImg[2].src;
            }
            SmallImg[3].onclick = function()
            {
                ProductImg.src = SmallImg[3].src;
            }

        </script>
<?php include 'view/masster/footer.php'; ?>