<?php 
$titel = "Home";
include 'view/masster/head.php';
require_once 'include/confing.php';
require_once 'Model/sanpham.php'; 
//require_once 'Model/test.php';

$db = new Sanpham();
$db->Connect();
require_once 'view/index.php';
include 'view/masster/footer.php';
?>