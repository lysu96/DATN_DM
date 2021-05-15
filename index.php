<?php 
$titel = "Home";
include 'view/masster/head.php';
require_once 'include/confing.php';
require_once 'Model/sanpham.php'; 
//require_once 'Model/test.php';

$db = new Sanpham();
$db->Connect();
// require_once 'view/index.php';
if (isset($_GET['Controller'])) {
	$Controller = $_GET['Controller'];
}
else
{
	$Controller = NULL;
}
switch ($Controller) {
	case 'Taikhoan':
			require_once 'Controller/login.php';
		break;
	case 'Products':
		require_once 'products.php';
		break;
	case 'Tintuc':
		if (isset($_GET['action'])) {
			$Actoin = $_GET['action'];
		}
		else
		{
			$Actoin = NULL;
		}
		switch ($Actoin) {
			case 'Add':
				echo "Thêm tin tức";
				break;
			case 'Edit':
				echo "Sửa";
				break;
			case 'Delete':
				echo "Xóa";
				break;
			default:
				echo "Hiện thị tin tức";
			break;
		}
		break;
	case 'Lienhe':
		require_once 'lienhe.php';
		break;
		case 'Cart':
		require_once 'cart.php';
		break;
	default:
		require_once 'view/index.php';
		break;
}
// include 'view/masster/footer.php';
include_once 'view/masster/html.php';
?>