<?php
//require_once 'include/confing.php'; 
require_once 'Model/sanpham.php'; 

$db = new Sanpham();
$db->Connect();
$titel = "Sản phẩm";
include 'view/masster/head.php'; 
?>
    <div class="container">
        <?php require_once 'view/masster/menu.php'; ?>
    </div>
    </div>



    <div class="small-container">

        <div class="row row-2">
            <h2>Tất cả sản phẩm</h2>
            <select>
                <option>Default Shop</option>
                <option>Short by price</option>
                <option>Short by popularity</option>
                <option>Short by Rating</option>
                <option>Short by Sale</option>
            </select>
        </div>

        <div class="row">
            <?php 
                //$sp = $db->List();
                $item_page = !empty($_GET['item_page']) ? $_GET['item_page'] : 2;
                $curres_page = !empty($_GET['curres_page']) ? $_GET['curres_page'] : 1;
                $offset = ($curres_page - 1) * $item_page;
                $sp = $db->List_PT($item_page, $offset);

                //var_dump($sp);

                $danhsach_sp = $db->Num_rows();
                $tong_sp = $danhsach_sp -> num_rows;
                $tong_page = ceil($tong_sp/$item_page);

                foreach ($sp as $value) {
                
            ?>
            <div class="col-4">
                <a href="products_detal.php?id=<?php echo $value["idsp"] ?>"><img src="images/<?php echo $value["hinhanhsp"]; ?>"></a>
                <a href="products_detal.php?id=<?php echo $value["idsp"] ?>"><h4><?php echo $value["tensp"] ?></h4></a>
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
        <div class="page-btn">
            <?php
                $trang = "products"; 
                require_once 'phantrang.php'; 
            ?>
        </div>
    </div>
   <?php include 'view/masster/footer.php'; ?>