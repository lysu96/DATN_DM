<!-- Ve dau -->
<?php if ($curres_page > 3) {
    $trangdau = 1;
    ?>
    <a href="<?= $trang.'.php';?>?item_page=<?= $item_page; ?>&curres_page=<?= $trangdau; ?>"><span><<</span></a>
<?php } ?>
<!-- prev -->
<?php if ($curres_page > 1) {
    $prev = $curres_page - 1;
    ?>
    <a href="<?= $trang.'.php';?>?item_page=<?= $item_page; ?>&curres_page=<?= $prev; ?>"><span><</span></a>
<?php } ?>
<!-- giua -->
<?php for ($i=1; $i <= $tong_page; $i++) { ?>
    <?php if ($i != $curres_page) { ?>
        <?php if ($i > $curres_page - 3 && $i < $curres_page +3) { ?>
            <a href="<?= $trang.'.php';?>?item_page=<?= $item_page; ?>&curres_page=<?= $i; ?>"><span><?= $i; ?></span></a>
        <?php } ?>
    <?php }else { ?>
        <span style="background: #ff523b;"><?= $i; ?></span>
    <?php } ?>
<?php } ?>
<!-- next &#8594; -->
<?php if ($curres_page < $tong_page - 1) {
    $next = $curres_page + 1;
?>
    <a href="<?= $trang.'.php';?>?item_page=<?= $item_page; ?>&curres_page=<?= $next; ?>"><span>></span></a>
<?php } ?>
<!-- cuoi -->
<?php if ($curres_page < $tong_page - 3) {
    $trangcuoi = $tong_page;
?>
    <a href="<?= $trang.'.php';?>?item_page=<?= $item_page; ?>&curres_page=<?= $trangcuoi; ?>"><span>>></span></a>
<?php } ?>