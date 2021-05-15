<?php 
require_once 'view/admin/header-admin.php';

if (isset($_GET['hd'])) {
	$hd = $_GET['hd'];
}
else
{
	$hd = NULL;
}
switch ($hd) {
	case 'donhang':
	
		require_once 'view/admin/list-producs.php';
		break;
	case 'hinhanh':
	
		echo "Hình ảnh";
		break;
	case 'bieudo':
		echo "Thống kê";
		break;
	case 'thongke':
		echo "Thống kê";
		break;
	case 'chitiethoadon':
		echo "Chi tiết hóa đơn";
		break;
	default:
		echo "TRang chính";
		
	    		// <!-- Icon Cards-->
	    //require_once 'view/admin/icon-cards.php';

	    		// <!-- Area Chart Example-->
	    //require_once 'view/admin/area-chart-example.php';

	    		// <!-- DataTables Example -->
	break;
}

require_once 'view/admin/footer-admin.php';
?>